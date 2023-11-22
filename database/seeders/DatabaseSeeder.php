<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Modules\Attribute\database\seeders\AttributeDatabaseSeeder;

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

        Schema::enableForeignKeyConstraints();
    }
}
