<?php

namespace App\Http\Controllers\AdminBackend;

use App\Http\Controllers\Controller;
use App\Models\Kuesioner;
use Illuminate\Http\Request;

class AdminQuestionnaireController extends Controller
{
    public function index()
    {
        $kuesioners = Kuesioner::get();
        return view('admin_backend.admin_questionnaire', compact('kuesioners'));
    }

    public function store(Request $request)
    {
        Kuesioner::create([
            'kategori_soal' => $request->create_kategori,
            'soal' => $request->create_soal,
        ]);
        return redirect()->route('adminQuestionnaire.index')->with('success', 'Soal berhasil disimpan');
    }

    public function update(Request $request, $admin_questionnaire)
    {
        $kuesioner = Kuesioner::findOrFail($admin_questionnaire);
        $kuesioner->kategori_soal = $request->edit_kategori;
        $kuesioner->soal = $request->edit_soal;
        $kuesioner->update();
        return redirect()->route('adminQuestionnaire.index')->with('success', 'Soal berhasil diubah');
    }

    public function destroy($admin_questionnaire)
    {
        $kuesioner = Kuesioner::findOrFail($admin_questionnaire);
        $kuesioner->delete();
        return redirect()->route('adminQuestionnaire.index')->with('success', 'Soal telah dihapus');
    }
}
