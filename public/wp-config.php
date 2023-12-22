<?php

use App\Access\Config;

$root = dirname(__DIR__);

/**
 * Composer autoloader
 */
require $root . '/vendor/autoload.php';

/**
 * Bootstrap app
 */
require $root . '/boot/init.php';

/**
 * Maybe define ABSPATH
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', $root . '/public/wp/');
}

/**
 * Specify database table prefix
 */
$table_prefix = Config::get('database.prefix');

/**
 * Load WordPress
 */
require ABSPATH . 'wp-settings.php';
