<?php


namespace Strix\Traits\Models;


use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Strix\Models\Category;

trait Categorizeable
{
    public function categories(): MorphToMany
    {
        return $this->morphToMany(Category\Category::class, 'categorizable', 'categorizables' ,'categorizable_id', 'category_id');
    }
}
