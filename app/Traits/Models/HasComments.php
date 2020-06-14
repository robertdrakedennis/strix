<?php
declare(strict_types=1);


namespace Strix\Traits\Models;


use Strix\Models\Comment;

trait HasComments
{
    /**
     * Returns all comments for this model.
     */
    public function comments()
    {
        return $this->morphMany(Comment\Comment::class, 'commentable');
    }
}
