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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('ktp_peminjam');
            $table->text('keperluan_pinjam');
            $table->date('mulai');
            $table->date('selesai');
            $table->text('komentar_peminjam')->nullable();
            $table->foreignId('armada_id')->constrained('armada')->onDelete('cascade');
            $table->string('status_pinjam')->default('Sedang diajukan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_peminjaman');
    }
};
