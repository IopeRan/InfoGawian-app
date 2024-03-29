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
        Schema::create('company', function (Blueprint $table) { 
            $table->id();
            $table->string('company', 120);
            $table->string('desc')->nullable();
            $table->string('rules')->nullable();
            $table->enum('status', [
                'inactive',
                'active'
            ]);
            $table->integer('user_id');
            $table->string('image');
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
