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
        Schema::create('tb_progress', function (Blueprint $table) {
            $table->id('ID_progress');
            $table->integer('ID_users');
            $table->integer('ID_kategori');
            $table->integer('ID_level');
            $table->string('progress');
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
