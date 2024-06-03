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
        Schema::create('tb_level', function (Blueprint $table) {
            $table->id('ID_level');
            $table->integer('ID_kategori');
            $table->string('level_1');
            $table->string('level_2');
            $table->string('level_3');
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
