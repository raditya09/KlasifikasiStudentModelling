<?php

namespace App\Http\Controllers\Adminbackend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ListUserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('admin_backend.admin_listuser', compact('users'));
    }
}
