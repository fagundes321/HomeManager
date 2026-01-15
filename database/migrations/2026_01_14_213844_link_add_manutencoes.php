<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('manutencaos', function (Blueprint $table) {
            $table->string('link')
                ->default(false)
                ->after('loja'); // opcional, só organiza
        });
    }

    public function down(): void
    {
        Schema::table('manutencaos', function (Blueprint $table) {
            $table->dropColumn('link');
        });
    }
};
