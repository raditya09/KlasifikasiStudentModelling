@extends('backend.layouts.template')
@section('content')
    <main id="main" class="main bg-white">
        <div class="pagetitle">
            <h1>Isi Kuesioner</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user.instruction') }}">Instruksi</a></li>
                <li class="breadcrumb-item active">Isi Kuesioner</li>
                </ol>
            </nav>
        </div>

        {{--! start fill  --}}
        <form action="" class="needs-validation" novalidate>
            <div class="bg-light rounded p-3 mt-3">
                <div class="d-flex flex-row">
                    <p class="me-1">1.</p>
                    <div>
                    <p>Saya bertanya kepada diri sendiri, ”Apakah saya sudah mencapai tujuan saya?”, ketika sedang berupaya mencapai tujuan secara intensif.</p>

                        <input type="radio" class="form-check-input" id="flexRadio1" name="optionsGroup" required>
                        <label class="form-check-label pe-1 pe-sm-5 ps-1" for="flexRadio1">1</label>
    
                        <input type="radio" class="form-check-input" id="flexRadio2" name="optionsGroup">
                        <label class="form-check-label pe-1 pe-sm-5 ps-1" for="flexRadio2">2</label>
    
                        <input type="radio" class="form-check-input" id="flexRadio3" name="optionsGroup">
                        <label class="form-check-label pe-1 pe-sm-5 ps-1" for="flexRadio3">3</label>
    
                        <input type="radio" class="form-check-input" id="flexRadio4" name="optionsGroup">
                        <label class="form-check-label pe-1 pe-sm-5 ps-1" for="flexRadio4">4</label>
    
                        <input type="radio" class="form-check-input" id="flexRadio5" name="optionsGroup">
                        <label class="form-check-label pe-1 pe-sm-5 ps-1" for="flexRadio5">5</label>
    
                        <div class="invalid-feedback mt-3 text-end">
                            <i class="bi bi-exclamation-circle-fill"></i> Pertanyaan belum dijawab!
                        </div>
                    </div>
                </div>
                

            </div>
            <div class="pt-5">
                <button type="submit" class="btn btn-primary px-5">Submit</button>
            </div>
        </form>
        {{--! end fill  --}}
       
    </main>
@endsection