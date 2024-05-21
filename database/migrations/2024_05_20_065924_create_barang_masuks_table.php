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
        Schema::create('data_transaksi', function (Blueprint $table) {
            $table->id();
            //user_id
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            //laptop_data
            $table->foreignId('laptop_id')->constrained('laptop_data')->onDelete('cascade');
            $table->enum('status', ['in', 'out', 'return']);
            $table->string('location')->nullable();
            $table->string('position')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_transaksi');
    }
};
