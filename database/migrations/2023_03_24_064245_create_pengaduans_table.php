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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pengaduan');
            $table->char('nik',16);
            $table->enum('kategori', ['sosial', 'lingkungan']);
            $table->text('isi_laporan');
            $table->enum('status', ['0', 'proses', 'selesai', 'belum verif'])->default('belum verif');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
