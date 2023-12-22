<?php

use function App\abspath;
use function App\url;
use function WebTheory\Config\env;
use function WebTheory\Config\get;

return [

    /**
     *==========================================================================
     * WP Config
     *==========================================================================
     *
     * Add any wp config entries that you'd rather define here over directly via
     * constant declaration.
     *
     * @link https://developer.wordpress.org/apis/wp-config-php/
     * @link https://wordpress.org/support/article/debugging-in-wordpress
     * @link https://github.com/spider-mane/wpdmc
     *
     */

    '@global' => [
        # Urls
        'wp_home' => env('WP_HOME'),
        'wp_siteurl' => env('WP_SITEURL'),

        # Database
        'db_name' => get('database.name'),
        'db_user' => get('database.user'),
        'db_password' => get('database.password'),
        'db_host' => get('database.host'),
        'db_charset' => get('database.charset'),
        'db_collate' => get('database.collate'),

        # Paths
        'wp_content_dir' => abspath('/public/app'),
        'wp_content_url' => url('/app'),

        # Theme
        'wp_default_theme' => 'leonidas-theme',

        # Error Handling
        'wp_debug_mode_checks' => false,
        'wp_debug' => false,
        'wp_debug_display' => false,
        'wp_disable_fatal_error_handler' => false,
        'script_debug' => false,
        'savequeries' => false,
        'jetpack_dev_debug' => false,

        # Updates
        'wp_auto_update_core' => false,
        'disallow_file_mods' => true,

        # Misc
        'wp_post_revisions' => true,
        'disallow_file_edit' => true,
        'automatic_updater_disabled' => true,
        'disable_wp_cron' => env('DISABLE_WP_CRON', false),
        'image_edit_overwrite' => true,

        # Keys and Salts
        'auth_key' => env('AUTH_KEY'),
        'secure_auth_key' => env('SECURE_AUTH_KEY'),
        'logged_in_key' => env('LOGGED_IN_KEY'),
        'nonce_key' => env('NONCE_KEY'),
        'auth_salt' => env('AUTH_SALT'),
        'secure_auth_salt' => env('SECURE_AUTH_SALT'),
        'logged_in_salt' => env('LOGGED_IN_SALT'),
        'nonce_salt' => env('NONCE_SALT'),
    ],

    '@development' => [
        # Debugging and Error Handling
        'wp_debug' => get('debug.enable'),
        'wp_debug_display' => get('debug.display'),
        'wp_debug_log' => get('debug.log'),
        'wp_disable_fatal_error_handler' => true,
        'script_debug' => true,
        'savequeries' => true,
        'jetpack_dev_debug' => true,

        # Updates
        'disallow_file_mods' => false,
        'wp_auto_update_core' => true,
    ],

    '@staging' => [
        'disallow_indexing' => true,
    ],

];
