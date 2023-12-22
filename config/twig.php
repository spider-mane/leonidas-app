<?php

use function App\abspath;
use function WebTheory\Config\reflect;

return [

    /**
     *==========================================================================
     * Root
     *==========================================================================
     *
     *
     *
     */
    'root' => abspath(),

    /**
     *==========================================================================
     * Paths
     *==========================================================================
     *
     *
     *
     */
    'paths' => [
        'views',
    ],

    /**
     *==========================================================================
     * Options
     *==========================================================================
     *
     *
     *
     */
    'options' => [
        'autoescape' => false,
        'cache' => abspath('/var/cache/views/twig'),
        'debug' => reflect('app.dev'),
    ],

    /**
     *==========================================================================
     * Extensions
     *==========================================================================
     *
     *
     *
     */
    'extensions' => [
        # Leonidas
        Leonidas\Library\Core\View\Twig\AdminFunctionsExtension::class,
        Leonidas\Library\Core\View\Twig\PrettyDebugExtension::class,
        Leonidas\Library\Core\View\Twig\SkyHooksExtension::class,
        Leonidas\Library\Core\View\Twig\StringHelperExtension::class,

        # Twig Extra
        Twig\Extra\Inky\InkyExtension::class,
        Twig\Extra\Intl\IntlExtension::class,
        Twig\Extra\Markdown\MarkdownExtension::class,

        # Plugin
        App\View\TwigExtension::class,

        # Third-Party
    ],

    /**
     *==========================================================================
     * Globals
     *==========================================================================
     *
     *
     *
     */
    'globals' => [
        //
    ],

    /**
     *==========================================================================
     * Runtime Loaders
     *==========================================================================
     *
     *
     *
     */
    'runtime_loaders' => [
        //
    ],

];
