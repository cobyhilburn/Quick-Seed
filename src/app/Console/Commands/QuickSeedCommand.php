<?php

namespace Coby\QuickSeed\App\Console\Commands;

use Coby\QuickSeed\App\Services\QuickSeedService;
use Illuminate\Console\Command;

class QuickSeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'QuickSeed:seed {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    /**
     * Execute the console command.
     */
    public function handle()
    {
       $file = $this->argument('file');
       $seedService = new QuickSeedService($file);
       $seedService->seed();
    }
}
