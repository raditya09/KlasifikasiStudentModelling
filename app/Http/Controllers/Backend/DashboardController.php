<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hasil;
use App\Models\User;
use App\Models\PilihPeriode;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
      $kmCounts = Hasil::select('km_class', DB::raw('count(*) as total'))
        ->groupBy('km_class')
        ->orderByRaw("FIELD(km_class, 'High', 'Medium', 'Low')")
        ->get();
      $rmCounts = Hasil::select('rm_class', DB::raw('count(*) as total'))
        ->groupBy('rm_class')
        ->orderByRaw("FIELD(rm_class, 'High', 'Medium', 'Low')")
        ->get();

        $checkPeriod = PilihPeriode::first();
        $idUser = auth()->user()->id;
        $historiPengisian = Hasil::where('id_user', $idUser)->where('id_periode', $checkPeriod->id_periode)->get();

      return view('backend.dashboard', compact('kmCounts', 'rmCounts', 'historiPengisian'));

    }
}
