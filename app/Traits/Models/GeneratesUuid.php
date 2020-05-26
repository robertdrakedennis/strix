<?php


namespace App\Traits\Models;


trait GeneratesUuid
{
    /**
     * Any model that is in the creating / bootable state will have a UUID 4 created for their primary key.
     *
     */
    protected static function bootGeneratesUuid(): void
    {
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = static::generateUUID();
        });
    }

    /**
     * Generates UUID4
     *
     * @return string
     */
    public static function generateUUID(): string
    {
        return \Illuminate\Support\Str::orderedUuid()->toString();
    }
}
