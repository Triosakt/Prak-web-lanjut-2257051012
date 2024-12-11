<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jurusan', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('nama_jurusan'); // Nama jurusan
            $table->timestamps(); // Created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('jurusan');
    }
};
