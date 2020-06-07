<?php
declare(strict_types=1);

namespace Strix\Models;

use Illuminate\Database\Eloquent\Model;
use Strix\Traits\Models\HasNanoId;

/**
 * Strix\Models\OauthProvider
 *
 * @property string $id
 * @property string $user_id
 * @property string $provider
 * @property string $provider_user_id
 * @property string|null $access_token
 * @property string|null $refresh_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Strix\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider whereAccessToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider whereProviderUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider whereRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider whereUserId($value)
 * @mixin \Eloquent
 * @property string $uid
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\OauthProvider whereUid($value)
 */
class OauthProvider extends Model
{
    use HasNanoId;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'oauth_providers';

    protected $fillable = [
        'provider', 'provider_user_id', 'access_token', 'refresh_token', 'profile_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'access_token', 'refresh_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
