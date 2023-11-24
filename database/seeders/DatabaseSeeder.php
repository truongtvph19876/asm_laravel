<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Modules\Attribute\database\seeders\AttributeDatabaseSeeder;
use Modules\Brand\database\seeders\BrandDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call(AuthTableSeeder::class);
        $this->call(AttributeDatabaseSeeder::class);

        $this->call(BrandDatabaseSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
