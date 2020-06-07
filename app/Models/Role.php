<?php
declare(strict_types=1);

namespace Strix\Models;

use Strix\Traits\Models\HasNanoId;

/**
 * Strix\Models\Role
 *
 * @property string $id
 * @property string $name
 * @property string|null $title
 * @property int|null $level
 * @property int|null $scope
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Strix\Models\Ability[] $abilities
 * @property-read int|null $abilities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Strix\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Silber\Bouncer\Database\Role whereAssignedTo($model, $keys = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role whereScope($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $uid
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Role whereUid($value)
 */
class Role extends \Silber\Bouncer\Database\Role
{
    use HasNanoId;
}
