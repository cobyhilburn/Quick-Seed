<?php

namespace Coby\QuickSeed;

use Illuminate\Database\Events\MigrationsEnded;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class QuickSeedServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->commands(
            [
                \Coby\QuickSeed\App\Console\Commands\QuickSeedCommand::class,
            ]
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
