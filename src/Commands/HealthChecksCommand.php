<?php

namespace Concept7\HealthChecks\Commands;

use Illuminate\Console\Command;

class HealthChecksCommand extends Command
{
    public $signature = 'health-checks';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
