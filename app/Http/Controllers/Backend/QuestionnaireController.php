<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use App\Models\Kuesioner;
use App\Models\Periode;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function index()
    {
        $kuesioners = Kuesioner::get();
        return view('backend.users_questionnaire', compact('kuesioners'));
    }

    public function store(Request $request)
    {
        $idUser = auth()->user()->id;

        $lastPeriode = Periode::latest()->first();
        $periode = Hasil::where('id_user', $idUser)->where('id_periode', $lastPeriode)->count();
        if ($periode > 0) {
            return redirect()->route('user.checkFilled')->with('error', 'Gagal, anda sudah pernah mengisikan kuesioner');
        }
        $answer = []; // Array yang berisi data jawaban

        foreach ($request->id as $index => $id) {
            $value = $request->input('optionsGroup' . $id);
            $kategori = $request->input('kategori')[$index];

            // Membuat array asosiatif dengan kategori
            $answerItem = [
                'id' => $id,
                'answer' => $value,
                'kategori' => $kategori,
            ];

            // Menambahkan array asosiatif ke dalam array $answer
            $answer[] = $answerItem;
        }

        // Menginisialisasi array untuk menyimpan total jawaban per kategori
        $totalsPerGroup = array_fill(1, 8, 0);

        // Menghitung total jawaban untuk setiap kategori
        foreach ($answer as $item) {
            $kategori = $item['kategori'];
            $totalsPerGroup[$kategori] += $item['answer'];
        }

        $kmTotal =  $totalsPerGroup[1] +  $totalsPerGroup[2] + $totalsPerGroup[3];
        $kmClass = null;
        if ($kmTotal >= 63) {
            $kmClass = 'Tinggi';
        } else if ($kmTotal >= 42) {
            $kmClass = 'Sedang';
        } else {
            $kmClass = 'Rendah';
        }

        $rmTotal =  $totalsPerGroup[4] +  $totalsPerGroup[5] + $totalsPerGroup[6] + $totalsPerGroup[7] + $totalsPerGroup[8];
        $rmClass = null;
        if ($rmTotal >= 63) {
            $rmClass = 'Tinggi';
        } else if ($rmTotal >= 42) {
            $rmClass = 'Sedang';
        } else {
            $rmClass = 'Rendah';
        }

        Hasil::create([
            'id_user' => $idUser,
            'id_periode' => 1,
            'declarative_knowledge' => $totalsPerGroup[1],
            'procedural_knowledge' => $totalsPerGroup[2],
            'conditional_knowledge' => $totalsPerGroup[3],
            'km_total' => $kmTotal,
            'km_class' => $kmClass,
            'planning' => $totalsPerGroup[4],
            'information_management' => $totalsPerGroup[5],
            'monitoring' => $totalsPerGroup[6],
            'debugging' => $totalsPerGroup[7],
            'evaluation' => $totalsPerGroup[8],
            'rm_total' => $rmTotal,
            'rm_class' => $rmClass,
        ]);

        return $idUser;
    }
}
