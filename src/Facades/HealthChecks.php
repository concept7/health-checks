<?php

namespace Concept7\HealthChecks\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Concept7\HealthChecks\HealthChecks
 */
class HealthChecks extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Concept7\HealthChecks\HealthChecks::class;
    }
}
