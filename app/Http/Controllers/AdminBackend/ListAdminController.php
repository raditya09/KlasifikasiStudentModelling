<?php

namespace App\Http\Controllers\AdminBackend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ListAdminController extends Controller
{
    //
     public function index()
     {
         $users = User::all()->where('kelas_user', '1');
         return view('admin_backend.admin_listuser', compact('users'));
     }
     // /**
     //  * Get a validator for an incoming registration request.
     //  *
     //  * @param  array  $data
     //  * @return \Illuminate\Contracts\Validation\Validator
     //  */
     // protected function validator(array $data)
     // {
     //     return Validator::make($data, [
     //         'nama_lengkap' => ['required', 'string', 'max:255'],
     //         'nim' => ['required', 'string', 'max:20'],
     //         'semester' => ['required', 'integer', 'max:12'],
     //         'angkatan' => ['required', 'integer', 'max:2250'],
     //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
     //         'password' => ['required', 'string', 'min:8', 'confirmed'],
     //     ]);
     // }
 
     // /**
     //  * Create a new user instance after a valid registration.
     //  *
     //  * @param  array  $data
     //  * @return \App\Models\User
     //  */
     // protected function create(array $data)
     // {
     //     return User::create([
     //         'nama_lengkap' => $data['nama_lengkap'],
     //         'nim' => $data['nim'],
     //         'semester' => $data['semester'],
     //         'angkatan' => $data['angkatan'],
     //         'email' => $data['email'],
     //         'password' => Hash::make($data['password']),
     //         'kelas_user' => '1',
     //     ]);
     // }
 
     public function store(Request $request)
     {
         $user = new User();
         $user->nama_lengkap = $request->input('nama_lengkap');
         $user->nim = $request->input('nim');
         $user->semester = $request->input('semester');
         $user->angkatan = $request->input('angkatan');
         $user->email = $request->input('email');
         $user->password = Hash::make($request->input('email'));
         $user->kelas_user = '1';
         // Setel atribut-atribut lain yang perlu diisi
         $user->save();
 
         return response()->json(['message' => 'User ditambahkan'], 201);
     }
}
