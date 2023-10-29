<?php

namespace App\Http\Controllers\AdminBackend;

use App\Http\Controllers\Controller;
use App\Models\Periode;
use App\Models\PilihPeriode;
use Illuminate\Http\Request;

class AdminPeriodController extends Controller
{

    public function index()
    {
        $periods = Periode::orderBy('id', 'desc')->get();
        $selectPeriod = PilihPeriode::first();
        if (!$selectPeriod->id_periode) {
            $selectPeriod->id_periode = 'Belum Ditambahkan';
        } else {
            $checkPeriod = Periode::findOrFail($selectPeriod->id_periode);
            if ($checkPeriod->semester == 1) {
                $checkPeriod->semester = 'Ganjil';
            } else {
                $checkPeriod->semester = 'Genap';
            }
            $selectPeriod->period = $checkPeriod->semester . ' ' . $checkPeriod->tahun;
        }

        return view('admin_backend.admin_period', compact('periods', 'selectPeriod'));
    }


    public function store(Request $request)
    {
        $semester = $request->semester;
        $tahunAwal = $request->tahun_awal;
        $tahunAkhir = $request->tahun_akhir;
        $tahun =  $tahunAwal . '/' . $tahunAkhir;
        $checkPeriod = Periode::where('semester', $semester)->where('tahun', $tahun)->count();
        if ($checkPeriod > 0) {
            return redirect()->route('adminPeriod.index')->with('error', 'Gagal, periode yang anda buat sudah ada');
        }
        if ($tahunAkhir - $tahunAwal != 1) {
            return redirect()->route('adminPeriod.index')->with('error', 'Gagal, tahun yang anda masukkan tidak valid');
        }
        Periode::create([
            'semester' => $request->semester,
            'tahun' => $tahun
        ]);
        return redirect()->route('adminPeriod.index')->with('success', 'Periode semester baru berhasil dibuat');
    }


    public function update(Request $request, $id)
    {
        $semester = $request->semester;
        $tahunAwal = $request->tahun_awal;
        $tahunAkhir = $request->tahun_akhir;
        $tahun =  $tahunAwal . '/' . $tahunAkhir;
        $checkPeriod = Periode::where('semester', $semester)->where('tahun', $tahun)->count();
        if ($checkPeriod > 0) {
            return redirect()->route('adminPeriod.index')->with('error', 'Gagal, periode yang anda buat sudah ada');
        }
        if ($tahunAkhir - $tahunAwal != 1) {
            return redirect()->route('adminPeriod.index')->with('error', 'Gagal, tahun yang anda masukkan tidak valid');
        }
        $period = Periode::findOrFail($id);
        $period->semester = $semester;
        $period->tahun = $tahun;
        $period->update();
        return redirect()->route('adminPeriod.index')->with('success', 'Periode tersebut telah diubah');
    }


    public function destroy($id)
    {
        $period = Periode::findOrFail($id);
        $period->delete();
        return redirect()->route('adminPeriod.index')->with('success', 'Periode tersebut telah dihapus');
    }
}
