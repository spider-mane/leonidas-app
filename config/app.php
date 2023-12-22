<?php

use function App\Config\info;
use function WebTheory\Config\env;

return [

    /**
     *==========================================================================
     * Application Name
     *==========================================================================
     *
     * The name of your app, stylized to your liking.
     *
     */
    'name' => info('name'),

    /**
     *==========================================================================
     * App Url
     *==========================================================================
     *
     *
     *
     */
    'url' => env('WP_HOME'),

    /**
     *==========================================================================
     * Version
     *==========================================================================
     *
     * Current version of your app.
     *
     */
    'version' => info('version'),

    /**
     *==========================================================================
     * Description
     *==========================================================================
     *
     * Description of your app that an about page can display. Can be
     * different from (and more descriptive than) the one in the app header.
     *
     */
    'description' => info('description'),

    /**
     *==========================================================================
     * Slug (Textdomain)
     *==========================================================================
     *
     * The app slug should ideally be identical to your app package name.
     * A slug is essentially a human-readable identifier and it is one way that
     * your app will be identified and referenced within WordPress including
     * but not limited to resolving the textdomain.
     *
     * @link https://developer.wordpress.org/apps/internationalization/how-to-internationalize-your-app/#text-domains
     *
     */
    'slug' => info('textdomain'),

    /**
     *==========================================================================
     * Namespace
     *==========================================================================
     *
     * A key to to use in contexts where it's desirable for a value to be
     * namespaced. The extension class will use this to prefix hook names.
     *
     */
    'namespace' => env('APP_NAMESPACE', 'application'),

    /**
     *==========================================================================
     * Prefix
     *==========================================================================
     *
     * An abbreviated tag that you can use to prefix entries into the system
     * where naming collisions are a highly probable, such as database entries,
     * element ids, input names, etc.
     *
     */
    'prefix' => env('APP_KEY_PREFIX', 'app'),

    /**
     *==========================================================================
     * Development
     *==========================================================================
     *
     * A simple expression such as a single function call or ternary statement
     * that should return true if the app is in a development environment.
     *
     */
    'dev' => defined('PSEUDO_CONSTANT_DEVELOPMENT'),

    /**
     *==========================================================================
     * Providers
     *==========================================================================
     *
     * Some DI containers support "service providers." These are typically self
     * contained classes with all the logic required for inserting an entry into
     * a container according to that container's capabilities. Because all
     * necessary logic is encapsulated within them, library-specific providers
     * are the cleanest solution to building your container.
     *
     */
    'providers' => [

        # Leonidas core
        Leonidas\Framework\Provider\League\AdminNoticeRepositoryServiceProvider::class,
        Leonidas\Framework\Provider\League\FormRepositoryServiceProvider::class,
        Leonidas\Framework\Provider\League\GuzzleServerRequestServiceProvider::class,
        Leonidas\Framework\Provider\League\PhoneNumberUtilServiceProvider::class,
        Leonidas\Framework\Provider\League\TransientsChannelServiceProvider::class,
        Leonidas\Framework\Provider\League\TwigFlexViewServiceProvider::class,

        # Leonidas site
        Leonidas\Framework\Site\Provider\League\SymfonyMailerServiceProvider::class,
        // Leonidas\Framework\Site\Provider\League\ReCaptchaServiceProvider::class,

        # App

        # Third-party

    ],

    /**
     *==========================================================================
     * Modules
     *==========================================================================
     *
     * Modules are classes that hook into WordPress and initiate desired
     * functionality for the specific events. Because all modules are passed
     * your WpExtensionInterface instance, which in turn provides access to your
     * DI container, they can be designed in a way makes them portable and
     * reusable between projects.
     *
     */
    'modules' => [

        # Leonidas core
        Leonidas\Framework\Module\Forms::class,
        Leonidas\Framework\Module\ImageSizes::class,

        # App
        App\Modules\AdminAssets::class,

    ],
];
