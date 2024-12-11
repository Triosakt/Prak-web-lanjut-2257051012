<?php

namespace App\Http\Controllers; 

use App\Http\Requests\UserRequest;
use App\Models\Kelas;
read-data
use App\Models\UserModel;

class UserController extends Controller
{

    public $userModel; 
    public $kelasModel;
    public function __construct(){
        $this->userModel = new UserModel(); 
        $this->kelasModel = new Kelas(); 
    }

    public function index() 
    { 
        $users = $this->userModel->getUser();
        
        $data = [ 
            'title' => 'Create User', 
            'users' => $this->userModel->getUser(), 
        ]; 
    
        return view('list_user', $data); 
    } 

    public function profile($nama = "", $kelas = "", $npm =
    "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];

use App\Models\Lab;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Ambil data user dengan relasi ke lab dan kelas
        $users = User::with('lab', 'kelas')->paginate(5);

        return view('list_user', [
            'title' => 'List User',
            'users' => $users,
        ]);
    }

    public function create()
    {
        // Ambil semua data kelas dan lab untuk dropdown di form
        $kelas = Kelas::all();
        $labs = Lab::all();

        return view('create_user', [
            'kelas' => $kelas,
            'labs' => $labs,
            'title' => 'Create User',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer|exists:kelas,id',
            'semester' => 'required|integer',
            'jurusan' => 'required|string|max:255',
            'lab_id' => 'required|integer|exists:lab,id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle upload foto
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->storeAs('public/upload/img', $foto->getClientOriginalName());
            $fotoPath = 'upload/img/' . $foto->getClientOriginalName();
        }

        // Buat user baru
        User::create([
            'nama' => $validatedData['nama'],
            'npm' => $validatedData['npm'],
            'kelas_id' => $validatedData['kelas_id'],
            'semester' => $validatedData['semester'],
            'jurusan' => $validatedData['jurusan'],
            'lab_id' => $validatedData['lab_id'],
            'foto' => $fotoPath,
        ]);
master

        return view('profile', $data);
    }

 read-data
    public function create()

    public function profile($nama = "", $kelas = "", $npm = "")
 master
    {
        // $kelasModel = new Kelas();
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

 read-data
    public function store(UserRequest $request)
    {
        $this->userModel->create([ 
            'nama' => $request->input('nama'), 
            'npm' => $request->input('npm'), 
            'kelas_id' => $request->input('kelas_id'), 
            ]); 
        
            return redirect()->to('/user'); 

    public function show($id)
    {
        // Ambil user dengan relasi ke lab dan kelas
        $user = User::with('lab', 'kelas')->findOrFail($id);

        return view('profile', [
            'title' => 'Profile',
            'user' => $user,
        ]);
master
    }
}