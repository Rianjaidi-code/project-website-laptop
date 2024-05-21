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
        Schema::create('laptop_data', function (Blueprint $table) {
            $table->id();
            //user_id
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            //number_sample
            $table->string('no_sample');
            //id_category
            $table->foreignId('id_category')->constrained('model_laptops');
            $table->string('model')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('screen_size')->nullable();
            $table->string('processor')->nullable();
            $table->string('storage_1')->nullable();
            $table->string('size_1')->nullable();
            $table->string('storage_2')->nullable();
            $table->string('size_2')->nullable();
            $table->string('ram')->nullable();
            $table->string('graphic_1')->nullable();
            $table->string('graphic_2')->nullable();
            $table->string('mac_address')->nullable();
            $table->string('wlan_or_bt_module')->nullable();
            $table->string('modem')->nullable();
            $table->string('colour')->nullable();
            $table->string('OS')->nullable();
            $table->string('install_os_date');
            $table->boolean('charger')->default(false);
            $table->text('condition_notes')->nullable();
            $table->string('date_check')->nullable();
            $table->string('location')->nullable();
            $table->string('position')->nullable();
            $table->string('expedision')->nullable();
            $table->string('in_date')->nullable();
            $table->enum('status', ['in', 'out', 'return']);
            // $table->string('out_date')->nullable();
            // $table->text('additional_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptop_data');
    }
};
