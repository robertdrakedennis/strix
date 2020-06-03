<?php
declare(strict_types=1);


namespace Strix\Traits\Models;


use Illuminate\Database\Eloquent\Model;

trait GeneratesUuid
{
    /**
     * Initializes values for
     *
     * @return void
     */
    public function initializeGeneratesUuid(): void
    {
        /**
         * Indicates if the IDs are auto-incrementing.
         *
         * @var bool
         */
        $this->incrementing = false;

        /**
         * The "type" of the primary key ID.
         *
         * @var string
         */
        $this->keyType = 'string';
    }

    /**
     * Any model that is in the creating / bootable state will have a UUID 4 created for their primary key.
     *
     */
    protected static function bootGeneratesUuid(): void
    {
        static::creating(function (Model $model) {
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
