<?php

namespace App\Http\Controllers\AdminBackend;

use App\Http\Controllers\Controller;
use App\Models\PilihPeriode;
use Illuminate\Http\Request;

class SelectPeriodController extends Controller
{

    public function update(Request $request)
    {
        $id = $request->id_periode;
        $pilihPeriode = PilihPeriode::first();
        $pilihPeriode->id_periode = $id;
        $pilihPeriode->aktif = '1';
        $pilihPeriode->update();
        return redirect()->route('adminPeriod.index')->with('success', 'Periode kuesioner telah diubah');
    }

    public function active(Request $request)
    {
        $pilihPeriode = PilihPeriode::first();
        $pilihPeriode->aktif = $request->optionActive;
        $pilihPeriode->update();
        return redirect()->route('adminPeriod.index')->with('success', 'Periode kuesioner telah diubah');
    }
}
