<?php

namespace Concept7\HealthChecks\Tests;

use Concept7\HealthChecks\HealthChecksServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\Health\HealthServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Concept7\\HealthChecks\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            HealthServiceProvider::class,
            HealthChecksServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
