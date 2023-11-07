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
         $users = User::all()->whereIn('kelas_user', ['1','2']);
         return view('admin_backend.admin_listadmin', compact('users'));
     }
        /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    public function store(Request $request)
    {
        User::create([
            'nama_lengkap' =>$request->nama_lengkap,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'kelas_user' => '2',
        ]);
        return redirect()->route('adminListAdmin.index')->with('success', 'Admin baru berhasil dibuat');
    }

    public function update(Request $request, $id)
    {
        $nama_lengkap = $request->nama_lengkap;
        $nim = $request->nim;
        $email = $request->email;
        $user = User::findOrFail($id);
        $user->nama_lengkap = $nama_lengkap;
        $user->nim = $nim;
        $user->email = $email;
        $user->update();
        return redirect()->route('adminListAdmin.index')->with('success', 'Admin tersebut telah diubah');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('adminListAdmin.index')->with('success', 'Admin tersebut telah dihapus');
    }
}
