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
        Schema::create('tbl_account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 70);
            $table->string('phone', 15);
            $table->string('password');
            $table->string('user_name', 50)->unique();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_account');
    }
};
