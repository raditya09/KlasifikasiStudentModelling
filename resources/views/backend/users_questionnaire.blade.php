@extends('backend.layouts.template')
@section('content')
    <main id="main" class="main bg-white">
        <div class="pagetitle">
            <h1>Isi Kuesioner</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user.questionnaire.instruction') }}">Instruksi</a></li>
                <li class="breadcrumb-item active">Isi Kuesioner</li>
                </ol>
            </nav>
        </div>

        {{--! start fill  --}}
        
        <form action="{{ route('userQuestionnaire.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            @foreach ($kuesioners as $index => $kuesioner)
                <div class="mb-3 visually-hidden">
                    <input type="text" class="form-control" name="id[]" value="{{ $kuesioner->id }}">
                    <input type="text" class="form-control" name="kategori[]" value="{{ $kuesioner->kategori_soal }}">
                </div>              
                <div class="bg-light rounded p-3 mt-3">
                    <div class="d-flex flex-row">
                        <p class="me-1">{{ $index + 1 }}.</p>
                        <div class="w-100">
                            <p>{{ $kuesioner->soal }}</p>

                            <input value="0" type="radio" class="form-check-input" id="radio0{{ $kuesioner->id }}" name="optionsGroup{{ $kuesioner->id }}" required>
                            <label class="form-check-label pe-1 pe-sm-5 ps-1" for="radio0{{ $kuesioner->id }}">0</label>
        
                            <input value="1" type="radio" class="form-check-input" id="radio1{{ $kuesioner->id }}" name="optionsGroup{{ $kuesioner->id }}">
                            <label class="form-check-label pe-1 pe-sm-5 ps-1" for="radio1{{ $kuesioner->id }}">1</label>
        
                            <input value="2" type="radio" class="form-check-input" id="radio2{{ $kuesioner->id }}" name="optionsGroup{{ $kuesioner->id }}">
                            <label class="form-check-label pe-1 pe-sm-5 ps-1" for="radio2{{ $kuesioner->id }}">2</label>
        
                            <input value="3" type="radio" class="form-check-input" id="radio3{{ $kuesioner->id }}" name="optionsGroup{{ $kuesioner->id }}">
                            <label class="form-check-label pe-1 pe-sm-5 ps-1" for="radio3{{ $kuesioner->id }}">3</label>
        
                            <input value="4" type="radio" class="form-check-input" id="radio4{{ $kuesioner->id }}"  name="optionsGroup{{ $kuesioner->id }}">
                            <label class="form-check-label pe-1 pe-sm-5 ps-1" for="radio4{{ $kuesioner->id }}">4</label>
        
                            <div class="invalid-feedback mt-3 text-end w-100">
                                <i class="bi bi-exclamation-circle-fill"></i> Pertanyaan belum dijawab!
                            </div>
                        </div>
                    </div>
                    
                </div>
            @endforeach
            <div class="pt-5">
                <button type="submit" class="btn btn-primary px-5">Submit</button>
            </div>
        </form>
        {{--! end fill  --}}
       
    </main>
@endsection