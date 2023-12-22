<?php

return [

    /**
     *==========================================================================
     * Scripts
     *==========================================================================
     *
     * You can define extra scripts to run as part of the bootstrapping process.
     * Defined scripts will be provided the WpExtension instance.
     *
     */

    'scripts' => [
        'constants',
        'environments',
    ],

    /**
     *==========================================================================
     * Classes
     *==========================================================================
     *
     * Bootstrap processes are classes you can use to encapsulate your
     * bootstrap requirements. Useful for keeping your Launcher class
     * simple and being able to reuse bootstrap processes between extensions.
     *
     */

    'classes' => [

        Leonidas\Framework\App\Bootstrap\ApplyLoadBalancePatch::class,
        Leonidas\Framework\App\Bootstrap\DefineConfigConstants::class,
        Leonidas\Framework\Bootstrap\BindContainerToFacades::class,
        App\Bootstrap\RegisterModelServices::class,

    ],

    /**
     *==========================================================================
     * Integrations
     *==========================================================================
     *
     * Technically, there are two bootstrap points: the first happens at the
     * very beginning of the application life-cycle and the second happens after
     * WordPress has loaded. You can define extra processes to run on the second
     * point here
     *
     */

    'load' => [

        Leonidas\Framework\App\Bootstrap\AutoloadMustUsePlugins::class,

    ],

    /**
     *==========================================================================
     * Options
     *==========================================================================
     *
     * Bootstrap process options can be defined here.
     *
     */

    'options' => [

        'facade' => App\Access\_Facade::class,

    ],

];
