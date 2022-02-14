<?php

namespace Tec\SocialLogin\Facades;

use Tec\SocialLogin\Supports\SocialService;
use Illuminate\Support\Facades\Facade;

class SocialServiceFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SocialService::class;
    }
}
