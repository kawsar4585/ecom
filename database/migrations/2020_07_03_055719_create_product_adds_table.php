<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_adds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->nullable();
            $table->text('name')->nullable();
            $table->double('amount')->nullable();
            $table->enum('stock',['in_stock','low_stock','out_of_stock'])->defoult('in_stock');
            $table->text('description')->nullable();
            $table->text('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_adds');
    }
}
