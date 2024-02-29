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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',64);
            $table->text('description')->nullable();
            $table->string('thumb', 1024)->nullable();
            $table->string('price');
            $table->string('series', 16);
            $table->date('sale_date');
            $table->string('type', 16)->nullable();
            $table->string('artists', 64)->nullable();
            $table->string('writers', 64)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
