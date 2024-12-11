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
        Schema::create('lab', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('nama_lab');
            $table->foreignId('jurusan_id')->constrained('jurusan')->onDelete('cascade');
            $table->foreignId('kalab_id')->constrained('kalab')->onDelete('cascade');
            $table->timestamps();
        });
    }
};
