<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('essenciais', function (Blueprint $table) {
            $table->string('unidade')
                ->default(false)
                ->after('quantidade'); // opcional, só organiza
        });
    }

    public function down(): void
    {
        Schema::table('essenciais', function (Blueprint $table) {
            $table->dropColumn('unidade');
        });
    }
};
