<?php

use App\Launcher;

$root = dirname(__DIR__, 1);

/**
 * Load functions
 */
array_map(fn ($path) => require "{$root}/app/{$path}.php", [
    'functions',
    'Config/functions',
]);

/**
 * Init launcher
 */
Launcher::init($root);
