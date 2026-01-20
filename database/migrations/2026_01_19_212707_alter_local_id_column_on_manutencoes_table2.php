<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('manutencaos', function (Blueprint $table) {
            $table->renameColumn('id_local', 'local_id');
        });
    }

    public function down(): void
    {
        Schema::table('manutencaos', function (Blueprint $table) {
            $table->renameColumn('local_id', 'id_local');
        });
    }
};
