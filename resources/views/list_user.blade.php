@extends('layouts.app')

@section('content')
 update-delete
<div class="mb-3 mt-2 m-3">
    <a href="{{ route('user.create') }}" class="btn btn-success">Tambah User</a>
<div class="bg-gradient-to-r from-teal-400 to-green-500 p-8 rounded-2xl shadow-lg"> <!-- Background Gradient + Rounded Corners -->
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center space-x-3">
            <i class="material-icons text-3xl text-white">group</i>
            <h2 class="text-3xl font-extrabold text-white">All Users</h2> <!-- Bolder text with White color -->
        </div>
        <a href="{{ route('users.create') }}" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full flex items-center space-x-2 transition duration-200">
            <i class="material-icons">add</i>
            <span>Tambah Pengguna Baru</span>
        </a>
    </div>

    <!-- Card Grid Section with darker style -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"> <!-- Wider gap between cards -->
        @foreach($users as $user)
        <div class="bg-gray-900 text-white rounded-xl shadow-xl overflow-hidden"> <!-- Dark theme for each card -->
            <!-- User Photo -->
            <div class="h-56 bg-gray-700"> <!-- Taller image section with darker bg -->
                @if($user->foto && file_exists(public_path('storage/' . $user->foto)))
                <!-- Display the uploaded user photo -->
                <img src="{{ asset('storage/' . $user->foto) }}"
                    alt="{{ $user->nama }}'s Photo"
                    class="w-full h-full object-cover">
                @else
                <!-- Display fallback/default image -->
                <div class="w-full h-full flex items-center justify-center bg-gray-500">
                    <img src="{{ asset('images/default.png') }}" alt="Default Photo" class="w-full h-full object-cover">
                </div>
                @endif
            </div>

            <!-- User Info -->
            <div class="p-6">
                <h3 class="text-2xl font-bold text-pink-400 mb-4">{{ $user->nama }}</h3> <!-- Larger font with pink color -->
                <div class="space-y-3 text-gray-300">
                    <p class="flex items-center">
                        <span class="font-semibold">NPM:</span>
                        <span class="ml-2">{{ $user->npm }}</span>
                    </p>
                    <p class="flex items-center">
                        <span class="font-semibold">Kelas:</span>
                        <span class="ml-2">{{ $user->kelas ? $user->kelas->nama_kelas : 'Tidak ada kelas' }}</span>
                    </p>
                    <p class="flex items-center">
                        <span class="font-semibold">Jurusan:</span>
                        <span class="ml-2">{{ $user->jurusan ?? 'Belum diisi' }}</span>
                    </p>
                    <p class="flex items-center">
                        <span class="font-semibold">Semester:</span>
                        <span class="ml-2">{{ $user->semester ?? 'Belum diisi' }}</span>
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="mt-6 flex justify-between items-center">
                    <a href="{{ route('users.show', $user->id) }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full flex items-center space-x-2 transition duration-200">
                        <i class="material-icons">visibility</i>
                        <span>View Profile</span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination Section -->
    <div class="mt-8 text-center">
        {{ $users->links() }} <!-- Centered pagination -->
    </div>
master
</div>

<div class="container mt-5">
    <h1 class="text-center">List Data</h1><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Kelas</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($users as $user) { ?>
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['nama'] }}</td>
                <td>{{ $user['npm'] }}</td>
                <td>{{ $user['nama_kelas'] }}</td>
                <td>
                    <img src="{{ asset('' . $user->foto) }}" alt="Foto User" width="100">
                </td>
                <td>
                    <!-- View -->
                    <a href="{{ route('user.show', $user['id']) }}" class="btn btn-primary btn-sm">View</a>
                    <!-- Edit -->
                    <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                    <!-- Delete -->
                    <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
@endsection
