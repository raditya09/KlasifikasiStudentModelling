<?php

namespace App\Http\Controllers\AdminBackend;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
  //
  public function index()
  {
    $angkatanCounts = User::whereNotNull('angkatan')
      ->select('angkatan', DB::raw('count(*) as total'))
      ->groupBy('angkatan')
      ->orderBy('angkatan', 'desc')
      ->get();
    $kmCounts = Hasil::select('km_class', DB::raw('count(*) as total'))
      ->groupBy('km_class')
      ->orderByRaw("FIELD(km_class, 'High', 'Medium', 'Low')")
      ->get();
    $rmCounts = Hasil::select('rm_class', DB::raw('count(*) as total'))
      ->groupBy('rm_class')
      ->orderByRaw("FIELD(rm_class, 'High', 'Medium', 'Low')")
      ->get();
    return view('admin_backend.admin_dashboard', compact('angkatanCounts', 'kmCounts', 'rmCounts'));
  }

  public function hasRole($id)
  {
    // foreach ($this->users as $user) {
    //   if ($user->kelas_user == $id) return true;
    // }
    return false;
  }
}
