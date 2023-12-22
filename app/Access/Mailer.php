<?php

namespace App\Access;

class Mailer extends _Facade
{
    protected static function _getFacadeAccessor()
    {
        return 'mailer';
    }
}
