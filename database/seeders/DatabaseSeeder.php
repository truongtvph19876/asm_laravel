<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Modules\Attribute\database\seeders\AttributeDatabaseSeeder;
use Modules\Brand\database\seeders\BrandDatabaseSeeder;
use Modules\Order\database\seeders\OrderDatabaseSeeder;
use Modules\Order\Models\Order;
use Modules\Product\database\seeders\ProductDatabaseSeeder;

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
        $this->call(ProductDatabaseSeeder::class);
        $this->call(OrderDatabaseSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
