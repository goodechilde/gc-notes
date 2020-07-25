<?php

namespace Goodechilde\Tests;

use Illuminate\Contracts\Console\Kernel;

use Orchestra\Testbench\TestCase as Orchestra;

use Goodechilde\CommonContact\CommonContactServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            CommonContactServiceProvider::class,
        ];
    }
}
