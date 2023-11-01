<?php

namespace Concept7\HealthChecks;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Concept7\HealthChecks\Commands\HealthChecksCommand;

class HealthChecksServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('health-checks')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_health-checks_table')
            ->hasCommand(HealthChecksCommand::class);
    }
}
