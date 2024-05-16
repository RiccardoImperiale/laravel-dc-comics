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
        Schema::table('comics', function (Blueprint $table) {
            $table->string('thumb', 255)->nullable()->change();
            $table->string('price', 25)->nullable()->change();
            $table->string('series', 255)->nullable()->change();
            $table->string('type', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->string('thumb', 255)->nullable(false)->change();
            $table->string('price', 25)->nullable(false)->change();
            $table->string('series', 255)->nullable(false)->change();
            $table->string('type', 50)->nullable(false)->change();
        });
    }
};
