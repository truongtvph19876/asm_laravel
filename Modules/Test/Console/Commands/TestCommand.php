<?php

namespace Modules\Test\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TestCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Command description';

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
