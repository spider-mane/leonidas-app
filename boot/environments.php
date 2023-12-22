<?php

use Env\Env;
use Leonidas\Contracts\Extension\WpExtensionInterface;

/** @var WpExtensionInterface $extension */

$file = __DIR__ . '/environments/' . Env::get('APP_ENV') . '.php';

if (file_exists($file)) {
    require $file;
}
