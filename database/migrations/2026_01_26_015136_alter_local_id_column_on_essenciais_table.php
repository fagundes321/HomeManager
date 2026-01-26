<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('essenciais', function (Blueprint $table) {
            $table->renameColumn('local', 'id_local');
        });
    }

    public function down(): void
    {
        Schema::table('essenciais', function (Blueprint $table) {
            $table->renameColumn('id_local', 'local');
        });
    }
};
