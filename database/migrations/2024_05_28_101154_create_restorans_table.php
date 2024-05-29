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
        Schema::create('restorans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table-> string('adres');
            $table -> string ('INN');
            $table -> string ('otziv');
            $table -> string ('img');
            $table->string('name_img');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restorans');
    }
};