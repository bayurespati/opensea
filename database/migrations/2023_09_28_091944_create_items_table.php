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
            $table->string('type_notebook');
            $table->string('processor_onboard');
            $table->string('standard_memory');
            $table->string('video_type');
            $table->string('display_size');
            $table->string('display_technology');
            $table->string('speakers_type');
            $table->string('microphone_type');
            $table->string('webcam_type');
            $table->string('hard_drive_type');
            $table->string('internal_wireless_network_type');
            $table->string('wireless_network_protocol');
            $table->string('internal_bluetooth');
            $table->string('keyboard_type');
            $table->string('input_device_mouse_type');
            $table->string('interface_provided');
            $table->string('operating_system');
            $table->string('battery_type');
            $table->string('power_supply');
            $table->string('weight');
            $table->string('dimensi');
            $table->string('bundled_peripherals');
            $table->integer('warranty');
            $table->bigInteger('price')->nullable();
            $table->integer('quantity')->nullable();
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
