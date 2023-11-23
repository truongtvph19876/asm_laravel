<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');

            $table->string('product_slug')->unique();
            $table->string('product_name');
            $table->bigInteger('product_price')->nullable();
            $table->string('product_image');
            $table->bigInteger('product_quantity');
            $table->text('description')->nullable();
            $table->string('detail')->nullable();
            $table->boolean('is_active')->default(1);

            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
