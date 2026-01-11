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
        Schema::create('manutencaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('local')->nullable();
            $table->string('unidade')->nullable();
            $table->string('observacao')->nullable();
            $table->decimal('preco')->nullable();
            $table->string('loja')->nullable();
            $table->string('cidade_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manutencaos');
    }
};
