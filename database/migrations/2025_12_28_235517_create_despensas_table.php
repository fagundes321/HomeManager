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
        Schema::create('despensas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 128);
            $table->string('marca', 128);
            $table->string("local", 10);
            $table->date('validade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('despensas');
    }
};
