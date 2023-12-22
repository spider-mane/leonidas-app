<?php

/**
 * Plugin Name: Application
 * Description: WordPress customizations
 * Version: :app_version
 * Requires at least: 6.1
 * Requires PHP: 8.0
 * Author: :developer_name
 * Author URI: :developer_website
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 * Text Domain: app
 * Domain Path: /lang
 */

defined('ABSPATH') || exit;

App\Launcher::hook();
