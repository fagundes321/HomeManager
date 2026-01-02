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
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->string('produto');
            $table->string('marca');
            $table->tinyInteger('avaliacao');
            $table->string('comentario')->nullable();
            $table->string('categoria');
            $table->decimal('menor_preco', 10, 2)->nullable();
            $table->decimal('maior_preco', 10, 2)->nullable();
            $table->date('data_avaliacao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacoes');
    }
};
