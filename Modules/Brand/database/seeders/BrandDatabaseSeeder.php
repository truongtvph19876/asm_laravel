<?php

namespace Modules\Brand\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Brand;

class BrandDatabaseSeeder extends Seeder
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
         * Brands Seed
         * ------------------
         */

        // DB::table('brands')->truncate();
        // echo "Truncate: brands \n";

        Brand::factory()->count(20)->create();
        $rows = Brand::all();
        echo " Insert: brands \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
