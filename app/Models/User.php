<?php
declare(strict_types=1);

namespace Strix\Models;

use Laravel\Sanctum\HasApiTokens;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Strix\Traits\Media\CachesMediaUrl;
use Strix\Traits\Models\GeneratesNanoId;
use Strix\Traits\Models\Sluggable;
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\Strix\Models\Media[] $media
 * @property-read int|null $media_count
 * @property string $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\Strix\Models\Ability[] $abilities
 * @property-read int|null $abilities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Strix\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereIs($role)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereIsAll($role)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereIsNot($role)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereSlug($value)
 * @property string $uid
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\User whereUid($value)
 */
class User extends Authenticatable implements MustVerifyEmail, HasMedia
{
    use Notifiable, GeneratesNanoId, HasApiTokens, InteractsWithMedia, HasRolesAndAbilities, CachesMediaUrl, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'slug', 'name', 'email', 'password',
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
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Registers the media collections the user will have
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')
            ->singleFile();

        $this->addMediaCollection('cover')
            ->singleFile();

        $this->addMediaCollection('cover.post')
            ->singleFile();
    }

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
