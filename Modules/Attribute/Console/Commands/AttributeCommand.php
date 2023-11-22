<?php

namespace Modules\Attribute\Console\Commands;

use Illuminate\Console\Command;

class AttributeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:AttributeCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Attribute Command description';

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
