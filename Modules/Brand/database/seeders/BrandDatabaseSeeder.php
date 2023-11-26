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

         DB::table('brands')->truncate();

        $brands = [
            [
                'id' => 1,
                'brand_name' => 'Unknown',
                'brand_logo' => 'brands/unknown.png'
            ],
            [
                'id' => 2,
                'brand_name' => 'Nike',
                'brand_logo' => 'brands/Logo_NIKE.svg.png'
            ],
            [
                'id' => 3,
                'brand_name' => 'Chanel',
                'brand_logo' => 'brands/chanel.jpg'
            ],
            [
                'id' => 4,
                'brand_name' => 'Adidas',
                'brand_logo' => 'brands/Adidas_logo.png'
            ],
        ];
        foreach ($brands as $brand) {
            \Modules\Brand\Models\Brand::create($brand);
        }
        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
