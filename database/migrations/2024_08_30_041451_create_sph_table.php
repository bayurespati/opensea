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
        Schema::create('sph', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->string('kepada');
            $table->timestamps();
            $table->string('nama_pic');
            $table->string('no_telpon');
            $table->string('alamat');
            $table->string('ongkir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sph');
    }
};
