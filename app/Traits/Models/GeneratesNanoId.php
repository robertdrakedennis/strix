<?php
declare(strict_types=1);


namespace Strix\Traits\Models;


use Hidehalo\Nanoid\Client;
use Illuminate\Database\Eloquent\Model;
use Strix\Traits\Generators\NanoIdGenerator;

trait GeneratesNanoId
{
    use NanoIdGenerator;

    public static function bootGeneratesNanoId(): void
    {
        static::creating(function (Model $model) {
            $model->uid = static::generateNanoId();
        });
    }
}
