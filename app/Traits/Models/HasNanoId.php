<?php
declare(strict_types=1);


namespace Strix\Traits\Models;


use Hidehalo\Nanoid\Client;
use Illuminate\Database\Eloquent\Model;
use Strix\Traits\Generators\NanoIdGenerator;

trait HasNanoId
{
    use NanoIdGenerator;

    /**
     * Name of the column where we'll store the Uid.
     *
     * @return string
     */
    protected static function getUidKey(): string
    {
        return 'uid';
    }

    public static function bootHasNanoId(): void
    {
        static::creating(function (Model $model) {
            $model->{static::getUidKey()} = static::generateNanoId();
        });
    }
}
