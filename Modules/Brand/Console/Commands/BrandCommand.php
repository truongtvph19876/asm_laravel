<?php

namespace Modules\Brand\Console\Commands;

use Illuminate\Console\Command;

class BrandCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:BrandCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Brand Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
