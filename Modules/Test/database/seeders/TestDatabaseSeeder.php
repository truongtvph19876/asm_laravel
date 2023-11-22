<?php

namespace Modules\Test\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Test;

class TestDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Tests Seed
         * ------------------
         */

        // DB::table('tests')->truncate();
        // echo "Truncate: tests \n";

        Test::factory()->count(20)->create();
        $rows = Test::all();
        echo " Insert: tests \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
