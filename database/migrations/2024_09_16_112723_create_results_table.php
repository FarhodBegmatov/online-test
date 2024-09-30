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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('scale1');
            $table->string('scale2');
            $table->string('scale3');
            $table->string('scale4');
            $table->string('scale5');
            $table->string('scale6');
            $table->string('scale7');
            $table->string('scale8');
            $table->string('scale9');
            $table->string('scale10');
            $table->string('scale11');
            $table->string('scale12');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
