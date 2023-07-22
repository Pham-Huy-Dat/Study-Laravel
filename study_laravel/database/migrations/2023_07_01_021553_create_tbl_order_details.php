<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_order_details', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_order');
            $table->integer('id_product');
            $table->double('price_sale');
            $table->integer('quantity_number');

            $table->timestamps();
        });
        // Schema::table('tbl_order_details', function ($table){
        //     $table->integer('id_order')->unsigned();
        //     $table->foreign('id_order')->references('id')->on('tbl_order');

        //     $table->integer('id_product')->unsigned();
        //     $table->foreign('id_product')->references('id')->on('tbl_product');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_order_details');
    }
};
