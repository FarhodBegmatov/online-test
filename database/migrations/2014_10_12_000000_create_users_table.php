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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('group_name')->nullable();
            $table->string('scale1')->nullable();
            $table->string('scale2')->nullable();
            $table->string('scale3')->nullable();
            $table->string('scale4')->nullable();
            $table->string('scale5')->nullable();
            $table->string('scale6')->nullable();
            $table->string('scale7')->nullable();
            $table->string('scale8')->nullable();
            $table->string('scale9')->nullable();
            $table->string('scale10')->nullable();
            $table->string('scale11')->nullable();
            $table->string('scale12')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
