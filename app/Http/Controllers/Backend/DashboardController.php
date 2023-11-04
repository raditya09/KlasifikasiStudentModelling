<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\KuesionerRM;
// use App\Models\KuesionerKM;
// use App\Models\Rangkuman;
// use App\Models\HistoriPengisian;
// use App\Models\PenjelasanKM;
// use App\Models\PenjelasanRM;

class DashboardController extends Controller
{
    public function index(){
        // $kuesionerRM = KuesionerRM::all();
        // $kuesionerKM = KuesionerKM::all();
        // $rangkuman = Rangkuman::all();
        // $historiPengisian = HistoriPengisian::all();
        // $penjelasanKM = PenjelasanKM::first(); 
        // $penjelasanRM = PenjelasanRM::first(); 

        return view('backend.dashboard', [
            // 'kuesionerRM' => $kuesionerRM,
            // 'kuesionerKM' => $kuesionerKM,
            // 'rangkuman' => $rangkuman,
            // 'historiPengisian' => $historiPengisian,
            // 'penjelasanKM' => $penjelasanKM,
            // 'penjelasanRM' => $penjelasanRM,
        ]);
    }
}
