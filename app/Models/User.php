<?php

namespace Strix\Models;

use Laravel\Sanctum\HasApiTokens;
use Strix\Traits\Models\GeneratesUuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Strix\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User query()
 * @mixin \Eloquent
 * @property string $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Strix\Models\OauthProvider[] $oauthProviders
 * @property-read int|null $oauth_providers_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereDeletedAt($value)
 */
class User extends Authenticatable /*  implements MustVerifyEmail */
{
    use Notifiable, GeneratesUuid, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the oauth providers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function oauthProviders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OAuthProvider::class);
    }


}
