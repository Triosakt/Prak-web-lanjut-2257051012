@extends('layouts.app') <!-- Menggunakan layout app.blade.php -->

@section('content') <!-- Mulai mendefinisikan bagian konten -->
<div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-blue-400 via-green-300 to-yellow-400"> <!-- Background gradient warna cerah -->
    <div class="w-full max-w-4xl bg-white shadow-2xl rounded-xl overflow-hidden"> <!-- Card diperlebar untuk horizontal form -->
        <div class="p-6">
            <h1 class="text-4xl font-bold text-center text-gray-900 mb-8">Register User</h1> <!-- Title dengan warna kontras -->

            <!-- Form dengan enctype="multipart/form-data" untuk mendukung pengunggahan file -->
            <form action="/user/store" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Flex container untuk susunan menyamping -->
                <div class="flex flex-wrap justify-between space-x-6"> <!-- Tambahkan space antara input -->

                    <!-- Input untuk Nama -->
                    <div class="relative flex-1">
                        <label for="nama" class="absolute text-xs text-gray-500 bg-white px-1 transform -translate-y-1/2 left-3 top-0">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required class="w-full p-4 bg-blue-100 text-gray-800 border border-blue-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 placeholder-gray-500" placeholder="Masukkan nama lengkap"/>
                    </div>

                    <!-- Input untuk NPM -->
                    <div class="relative flex-1">
                        <label for="npm" class="absolute text-xs text-gray-500 bg-white px-1 transform -translate-y-1/2 left-3 top-0">NPM</label>
                        <input type="text" id="npm" name="npm" required class="w-full p-4 bg-green-100 text-gray-800 border border-green-300 rounded-lg focus:outline-none focus:border-green-500 transition duration-200 placeholder-gray-500" placeholder="Masukkan NPM"/>
                    </div>
                </div>

                <!-- Flex container kedua -->
                <div class="flex flex-wrap justify-between space-x-6"> <!-- Baris kedua -->
                    
                    <!-- Dropdown untuk Kelas -->
                    <div class="relative flex-1">
                        <label for="kelas_id" class="absolute text-xs text-gray-500 bg-white px-1 transform -translate-y-1/2 left-3 top-0">Kelas</label>
                        <select name="kelas_id" id="kelas_id" required class="w-full p-4 bg-yellow-100 text-gray-700 border border-yellow-300 rounded-lg focus:outline-none focus:border-yellow-500 transition duration-200">
                            <option value="" disabled selected> Kelas</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Input untuk Semester -->
                    <div class="relative flex-1">
                        <label for="semester" class="absolute text-xs text-gray-500 bg-white px-1 transform -translate-y-1/2 left-3 top-0">Semester</label>
                        <input type="number" id="semester" name="semester" required class="w-full p-4 bg-pink-100 text-gray-800 border border-pink-300 rounded-lg focus:outline-none focus:border-pink-500 transition duration-200 placeholder-gray-500" placeholder="Masukkan semester"/>
                    </div>
                </div>

                <!-- Flex container ketiga -->
                <div class="flex flex-wrap justify-between space-x-6"> <!-- Baris ketiga -->
                    
                    <!-- Input untuk Jurusan -->
                    <div class="relative flex-1">
                        <label for="jurusan" class="absolute text-xs text-gray-500 bg-white px-1 transform -translate-y-1/2 left-3 top-0">Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan" required class="w-full p-4 bg-purple-100 text-gray-800 border border-purple-300 rounded-lg focus:outline-none focus:border-purple-500 transition duration-200 placeholder-gray-500" placeholder="Masukkan jurusan"/>
                    </div>

                    <!-- Input untuk Foto -->
                    <div class="relative flex-1">
                        <label for="foto" class="absolute text-xs text-gray-500 bg-white px-1 transform -translate-y-1/2 left-3 top-0">Upload Foto</label>
                        <input type="file" id="foto" name="foto" class="w-full p-4 bg-teal-100 text-gray-800 border border-teal-300 rounded-lg focus:outline-none focus:border-teal-500 transition duration-200"/>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="pt-4">
                    <button type="submit" class="w-full p-3 bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-lg hover:from-green-500 hover:to-blue-600 transition duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection <!-- Selesai mendefinisikan bagian konten -->
