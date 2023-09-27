@extends('backend/layouts.template')
@section('content')
     <main id="main" class="main">
        <div class="pagetitle">
            <h1>Instruksi</h1>
            <nav>
                <ol class="breadcrumb">
                </ol>
            </nav>
        </div>  
        <div class="bg-white p-3">
            <h4 class="font-bold">Petunjuk Pengisian Kuesioner</h4>
            <h6 class="font-bold pt-4">Petunjuk Pengisian</h6>
            <div class="pt-1">
                <div class="d-flex flex-row text-secondary">
                    <p class="pe-2">1.</p>
                    <p>Pada kuisioner, tiap pernyataan diisi sesuai dengan keadaan sebenarnya, hal ini bertujuan untuk mengetahui kemampuan metakognitif pada diri Saudara</p>
                </div>
                <div class="d-flex flex-row text-secondary">
                    <p class="pe-2">2.</p>
                    <p>Baca dengan teliti tiap pernyataan agar tidak terjadi kesalahan pada saat pengisiian</p>
                </div>
                <div class="d-flex flex-row text-secondary">
                    <p class="pe-2">3.</p>
                    <p>Pilih radio button pada kolom nomor sesuai dengan keadaan Saudara</p>
                </div>
                <div class="d-flex flex-row text-secondary">
                    <p class="pe-2">4.</p>
                    <p>Apabila terdapat kesulitan dalam proses pengisian, tanyakan pada tim yang bertugas</p>
                </div>
            </div>
            <div class="rounded mt-4 bg-light p-3">
                <h6 class="font-bold">Makna Skor</h6>
                <div class="mt-1">
                    <input type="radio" disabled><span class="ms-3 font-bold h6">0 = Tidak Pernah</span>
                </div>
                <div class="mt-1">
                    <input type="radio" disabled><span class="ms-3 font-bold h6">1 = Jarang</span>
                </div>
                <div class="mt-1">
                    <input type="radio" disabled><span class="ms-3 font-bold h6">2 = Kadang-kadang</span>
                </div>
                <div class="mt-1">
                    <input type="radio" disabled><span class="ms-3 font-bold h6">3 = Sering</span>
                </div>
                <div class="mt-1">
                    <input type="radio" disabled><span class="ms-3 font-bold h6">4 = Selalu</span>
                </div>
            </div>
            <div class="mt-4 mb-1 text-center">
                <a href="{{ route('userQuestionnaire.index') }}" class="btn btn-primary">Mulai Isi Kuesioner <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
     </main>
 @endsection