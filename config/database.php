<?php

use Enqueue\Dsn\Dsn;

use function WebTheory\Config\env;

$dsn = Dsn::parseFirst(env('DATABASE_URL', ':'));

return [

    /**
     *==========================================================================
     * Database
     *==========================================================================
     *
     *
     *
     */

    'name' => $dsn->getPath() ?? env('DB_NAME'),
    'user' => $dsn->getUser() ?? env('DB_USER'),
    'password' => $dsn->getPassword() ?? env('DB_PASSWORD', ''),
    'host' => $dsn->getHost() ?? env('DB_HOST', 'localhost'),
    'charset' => 'utf8mb4',
    'collate' => 'utf8mb4_unicode_ci',
    'prefix' => env('DB_PREFIX', 'wp_'),

];
