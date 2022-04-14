<?php

namespace Takiwos\Remote;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Takiwos\Remote\Commands\RemoteCommand;

class RemoteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         */
        $package
            ->name('laravel-remote')
            ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_laravel-remote_table')
            ->hasCommand(RemoteCommand::class);
    }
}