<?php

namespace App\Http\Controllers\AdminBackend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminResultController extends Controller
{
    public function index()
    {
        return view('admin_backend.admin_result');
    }
}
