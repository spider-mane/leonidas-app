<?php

namespace App;

use Leonidas\Contracts\Extension\WpExtensionInterface;
use Leonidas\Framework\App\AppLoader;
use Leonidas\Framework\Exception\PluginInitiationException;

final class Launcher
{
    private AppLoader $loader;

    private WpExtensionInterface $extension;

    private static self $instance;

    private static bool $hooked = false;

    private function __construct(string $base)
    {
        $this->loader = new AppLoader($base);
        $this->extension = $this->loader->getExtension();
    }

    private function launch(): void
    {
        $this->initiate()->boot();
    }

    private function initiate(): self
    {
        App::init($this->extension);

        return $this;
    }

    private function boot(): self
    {
        $this->loader->bootstrap();

        return $this;
    }

    private function plug(): void
    {
        $this->listen()->broadcast();
    }

    private function listen(): self
    {
        $this->loader->integrate();

        static::$hooked = true;

        return $this;
    }

    private function broadcast(): void
    {
        $this->extension->doAction('loaded');
    }

    public static function init(string $base): void
    {
        !isset(self::$instance) ? self::load($base) : self::error(__METHOD__);
    }

    public static function hook(): void
    {
        !self::$hooked ? self::setup() : self::error(__METHOD__);
    }

    private static function load(string $base): void
    {
        (self::$instance = new self($base))->launch();
    }

    private static function setup(): void
    {
        self::$instance->plug();
    }

    private static function error(string $method): void
    {
        throw new PluginInitiationException(
            static::$instance->extension,
            $method
        );
    }
}
