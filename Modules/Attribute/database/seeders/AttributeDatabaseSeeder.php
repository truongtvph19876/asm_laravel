<?php

namespace Modules\Attribute\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Attribute\Models\Attribute;

class AttributeDatabaseSeeder extends Seeder
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
         * Attributes Seed
         * ------------------
         */

        // DB::table('attributes')->truncate();
        // echo "Truncate: attributes \n";
        $data = [
            [
                'id' => 1,
                'name' => 'Color',
            ],
            [
                'id' => 2,
                'name' => 'Size'
            ],
            [
                'id' => 3,
                'name' => 'Green',
                'parent_id' => 1,
                'value' => '#f00800'
            ],
            [
                'id' => 4,
                'name' => 'Black',
                'parent_id' => 1,
                'value' => '#000000'
            ],
            [
                'id' => 5,
                'name' => 'Small',
                'parent_id' => 2,
                'value' => 'S'
            ],
            [
                'id' => 6,
                'name' => 'Large',
                'parent_id' => 2,
                'value' => 'L'
            ],
        ];

        foreach ($data as $attribute) {
            Attribute::create($attribute);
        }

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
