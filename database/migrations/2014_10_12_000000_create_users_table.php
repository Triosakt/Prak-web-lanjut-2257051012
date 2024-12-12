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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Ganti 'name' menjadi 'nama'
            $table->string('npm')->unique(); // Kolom npm (unik untuk setiap user)
            $table->unsignedBigInteger('kelas_id')->nullable(); // Foreign key untuk kelas (opsional)
            $table->string('foto')->nullable(); // Kolom untuk menyimpan nama file foto (opsional)
            $table->string('jurusan')->nullable(); // Kolom jurusan
            $table->string('semester')->nullable(); // Kolom semester
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Tambahkan foreign key untuk kelas_id
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
