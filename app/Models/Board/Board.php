<?php
declare(strict_types=1);

namespace Strix\Models\Board;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Strix\Models\Thread\Thread;
use Strix\Traits\Models\Categorizeable;
use Strix\Traits\Models\HasNanoId;
use Strix\Traits\Models\HasSlug;

/**
 * Strix\Models\Board\Board
 *
 * @property int $id
 * @property string $uid
 * @property string $title
 * @property string $slug
 * @property mixed $description
 * @property string|null $locked_at
 * @property-read int|null $thread_count
 * @property int $comment_count
 * @property int $weight
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Strix\Models\Category\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Strix\Models\Thread\Thread[] $thread
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereCommentCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereLockedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereThreadCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Board\Board whereWeight($value)
 * @mixin \Eloquent
 */
class Board extends Model
{
    use HasNanoId, HasSlug, Categorizeable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid', 'slug', 'title', 'description', 'thread_count', 'comment_count', 'weight'
    ];

    /**
     * Return all threads a board has.
     *
     * @return HasMany
     */
    public function threads(): HasMany
    {
        return $this->hasMany(Thread::class);
    }
}