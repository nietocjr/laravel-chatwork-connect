<?php

namespace nietocjr\LaravelChatworkConnect\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \nietocjr\LaravelChatworkConnect\LaravelChatworkConnect
 */
class LaravelChatworkConnect extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \nietocjr\LaravelChatworkConnect\LaravelChatworkConnect::class;
    }
}
