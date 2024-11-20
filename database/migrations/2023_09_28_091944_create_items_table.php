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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk')->unique();
            $table->string('masa_berlaku_produk');
            $table->string('satuan');
            $table->string('jenis_produk');
            $table->string('nilai_tkdn');
            $table->string('nilai_bmp');
            $table->bigInteger('harga');
            $table->text('deskripsi');
            $table->string('negara_asal_produk');

            //If product laptop/PC/AiO/Server
            $table->string('type')->nullable();
            $table->string('prosesor')->nullable();
            $table->string('ram')->nullable();
            $table->string('storage')->nullable();
            $table->string('vga')->nullable();
            $table->string('sistem_operasi')->nullable();
            //If product laptop/PC/AiO/Server

            $table->string('garansi')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('web_marketplace')->nullable();

            //Image
            $table->string('image')->nullable();

            //Relation
            $table->integer('brand_id'); // Merek
            $table->integer('divisi_id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('diskon_id')->nullable();
            $table->boolean('is_ready')->default(1);
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
