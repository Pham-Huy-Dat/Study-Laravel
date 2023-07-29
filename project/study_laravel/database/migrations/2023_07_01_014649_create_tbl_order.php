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
        Schema::create('tbl_order', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('date_time');
            $table->string('name_customer');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->double('total_money');
            $table->integer('id_status');
            $table->integer('id_customer');

            $table->timestamps();
        });

        // Schema::table('tbl_order', function ($table){
        //     $table->integer('id_status')->unsigned();
        //     $table->foreign('id_status')->references('id')->on('tbl_status');

        //     $table->integer('id_customer')->unsigned();
        //     $table->foreign('id_customer')->references('id')->on('tbl_account');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_order');
    }
};
