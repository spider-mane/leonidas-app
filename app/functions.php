<?php

namespace App;

function info(string $header): ?string
{
    return App::instance()->header($header);
}

function path(?string $file = null): string
{
    return App::instance()->path($file);
}

function abspath(?string $file = null): string
{
    return App::instance()->absPath($file);
}

function url(?string $file = null): string
{
    return App::instance()->url($file);
}
