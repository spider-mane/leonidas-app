<?php

namespace App\Config;

use App\App;
use WebTheory\Config\Deferred\Callback;

use function WebTheory\Config\call;

function info(string $header): Callback
{
    return call([App::instance(), 'header'], $header);
}
