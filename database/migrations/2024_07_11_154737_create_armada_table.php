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
        Schema::create('armada', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('nopol');
            $table->integer('thn_beli');
            $table->text('deskripsi');
            $table->integer('kapasitas_kursi');
            $table->string('rating', 1);
            $table->decimal('biaya', 10, 2);
            $table->foreignId('jenis_kendaraan_id')->constrained('jenis_kendaraan')->onDelete('cascade');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armada');
    }
};
