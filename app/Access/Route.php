<?php

namespace App\Access;

class Route extends _Facade
{
    protected static function _getFacadeAccessor()
    {
        return 'router';
    }
}
