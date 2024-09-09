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
        Schema::table('sph', function (Blueprint $table) {
            $table->string('nama_pic')->nullable();
            $table->string('no_telpon')->nullable();
            $table->text('alamat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sph', function (Blueprint $table) {
            $table->dropColumn(['nama_pic', 'no_telpon', 'alamat']);
        });
    }
};
