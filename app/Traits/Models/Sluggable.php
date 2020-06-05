<?php
declare(strict_types=1);


namespace Strix\Traits\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait Sluggable
{
    /**
     *
     *
     * @var string
     */
    protected static string  $fallbackColumn = 'uid';

    /**
     * Any model that is in the creating / bootable state will have a slug created for their slug field.
     *
     */
    protected static function bootSluggable(): void
    {
        static::creating(function (Model $model) {
            $model->slug = static::generateSlug($model);
        });
    }

    /**
     * Generates Slug
     *
     * @param Model $model
     * @return string
     */
    protected static function generateSlug(Model $model): string
    {
        $slug = Str::slug($model->name);

        if (Str::length($slug) >= 1) {
            return static::processRelatedSlugs($model, $slug);
        }

        return $model->getAttributeValue(static::$fallbackColumn);
    }

    /**
     * Search for related slugs on this model, default to Uuid to avoid duplicate slugs
     *
     * @param Model $model
     * @param string $slug
     * @return string
     */
    protected static function processRelatedSlugs(Model $model, string $slug): string
    {
        if ($model->where('slug', '=', $slug)->exists()) {
            return $model->getAttributeValue('uid');
        }

        return $slug;
    }
}
