<?php
declare(strict_types=1);

namespace BEdita\Chatlas\Test\TestApp;

use Cake\Http\BaseApplication;
use Cake\Http\MiddlewareQueue;

/**
 * Application setup class.
 *
 * This defines the bootstrapping logic and middleware layers you
 * want to use in your application.
 */
class Application extends BaseApplication
{
    /**
     * @inheritDoc
     */
    public function bootstrap(): void
    {
        $this->addPlugin('BEdita/Chatlas', ['path' => dirname(dirname(__DIR__)) . DS]);
    }

    /**
     * @inheritDoc
     */
    public function middleware($middlewareQueue): MiddlewareQueue
    {
        return $middlewareQueue;
    }
}
