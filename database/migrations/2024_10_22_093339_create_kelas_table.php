<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'kelas'
        Schema::create('kelas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_kelas'); // Nama kelas (varchar)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'kelas'
        Schema::dropIfExists('kelas');
    }
}
