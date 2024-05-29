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
        Schema::create('user_admins', function (Blueprint $table) {
            // почему то не указан тип
            $table->id();
            $table -> string('name', length: 255) -> nullable(false);  
            $table -> string('surname', length: 255) -> nullable(false);
            $table -> string('phone', length: 255);
            $table -> string('email', length: 255) -> nullable(false)-> unique('email');
            $table -> string('password', length: 255) -> nullable(false);
            $table -> string('remeber_token', length: 100) -> nullable(true);
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
