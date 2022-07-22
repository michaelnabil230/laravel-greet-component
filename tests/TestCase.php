<?php

namespace MichaelNabil230\Greet\Tests;

use MichaelNabil230\Greet\GreetServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            GreetServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('view.paths', [__DIR__.'/templates']);
    }
}
