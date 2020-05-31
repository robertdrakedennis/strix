<?php

namespace Strix\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Socialite;
use Strix\Http\Controllers\Controller;
use Strix\Http\Resources\Users\DefaultUserResource;
use Strix\Models\OauthProvider;
use Strix\Models\User;

class OAuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Redirect the user to the provider authentication page.
     *
     * @param  string $provider
     * @return \Illuminate\Http\JsonResponse
     */
    public function redirectToProvider(string $provider): JsonResponse
    {
        return response()->json([
            'url' => Socialite::driver($provider)->stateless()->redirect()->getTargetUrl(),
        ], 200);
    }

    /**
     * Obtain the user information from the provider.
     *
     * @param  string $provider
     * @return DefaultUserResource
     */
    public function handleProviderCallback(string $provider): DefaultUserResource
    {
        $user = Socialite::driver($provider)->stateless()->user();

        $user = $this->findOrCreateUser($provider, $user);

        \Auth::login($user, true);

        return new DefaultUserResource($user);
    }

    /**
     * @param  string $provider
     * @param  \Laravel\Socialite\Contracts\User $socialiteUser
     * @return User
     */
    protected function findOrCreateUser(string $provider, \Laravel\Socialite\Contracts\User $socialiteUser): User
    {
        $oauthProvider = OAuthProvider::where('provider', $provider)
            ->whereExists(function ($query) use ($socialiteUser) {
                $query->where('provider_user_id', $socialiteUser->getId());
            })
            ->first();

        if ($oauthProvider) {
            $oauthProvider->update([
                'access_token' => $socialiteUser->token,
                'refresh_token' => $socialiteUser->refreshToken,
            ]);

            return $oauthProvider->user;
        }

        if (User::where('email', $socialiteUser->getEmail())->exists()) {
//            throw new EmailTakenException;
        }

        return $this->createUser($provider, $socialiteUser);
    }

    /**
     * @param  string $provider
     * @param  \Laravel\Socialite\Contracts\User $socialiteUser
     * @return User
     */
    protected function createUser(string $provider, \Laravel\Socialite\Contracts\User $socialiteUser): User
    {
        $user = User::create([
            'name' => $socialiteUser->getName(),
            'email' => $socialiteUser->getEmail(),
        ]);

        $user->markEmailAsVerified();

        $user->oauthProviders()->create([
            'provider' => $provider,
            'provider_user_id' => $socialiteUser->getId(),
            'access_token' => $socialiteUser->token,
            'refresh_token' => $socialiteUser->refreshToken,
        ]);

        return $user;
    }
}
