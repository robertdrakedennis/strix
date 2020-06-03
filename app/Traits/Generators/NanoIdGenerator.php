<?php


namespace Strix\Traits\Generators;


use Hidehalo\Nanoid\Client;

trait NanoIdGenerator
{
    protected static function generateNanoId($secure = true): string
    {
        $nano = new Client();

        $mode = $secure ? Client::MODE_DYNAMIC : Client::MODE_NORMAL;

        return $nano->generateId(21, $mode);
    }
}
