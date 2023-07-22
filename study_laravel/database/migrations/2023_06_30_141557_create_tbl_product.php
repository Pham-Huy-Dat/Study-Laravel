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
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name_product');
            $table->double('price');
            $table->string('image');
            $table->string('image2');
            $table->string('image3');
            $table->string('description');
            $table->string('description2');
            $table->string('discount');
            $table->integer('id_category');
            $table->timestamps();

            
        });

        // Schema::table('tbl_product', function ($table){
        //     $table->integer('id_category')->unsigned();
        //     $table->foreign('id_category')->references('id')->on('tbl_category');
        // });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::dropIfExists('tbl_product');
    }
};
