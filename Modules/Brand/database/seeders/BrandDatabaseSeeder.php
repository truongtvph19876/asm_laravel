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

        $brands = [
            [
                'id' => 1,
                'brand_name' => 'Nike',
                'brand_logo' => 'assets/images/brands/Logo_NIKE.svg.png'
            ],
            [
                'id' => 2,
                'brand_name' => 'Chanel',
                'brand_logo' => 'assets/images/brands/chanel.jpg'
            ],
        ];
        foreach ($brands as $brand) {
            \Modules\Brand\Models\Brand::create($brand);
        }
        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
