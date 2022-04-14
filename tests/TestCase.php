<?php

namespace Takiwos\Remote\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Takiwos\Remote\RemoteServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            RemoteServiceProvider::class,
        ];
    }
}