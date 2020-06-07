<?php
declare(strict_types=1);

namespace Strix\Models;

use Strix\Traits\Models\HasNanoId;

/**
 * Strix\Models\Ability
 *
 * @property string $id
 * @property string $name
 * @property string|null $title
 * @property string|null $entity_id
 * @property string|null $entity_type
 * @property bool $only_owned
 * @property array $options
 * @property int|null $scope
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $identifier
 * @property-read string $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\Strix\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Strix\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Silber\Bouncer\Database\Ability byName($name, $strict = false)
 * @method static \Illuminate\Database\Eloquent\Builder|\Silber\Bouncer\Database\Ability forModel($model, $strict = false)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Silber\Bouncer\Database\Ability simpleAbility()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereEntityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereOnlyOwned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereScope($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $uid
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Ability whereUid($value)
 */
class Ability extends \Silber\Bouncer\Database\Ability
{
    use HasNanoId;
}
