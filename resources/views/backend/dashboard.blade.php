@extends('backend/layouts.template')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

               <!-- Komponen 1: Hasil Nilai Kuesioner KM -->
               <div class="col-xxl-4 col-md-6">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Nilai KM</h5>
                        <span class="pull-right">50</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: $percentage %;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="63"></div>
                        </div>
                        <script>
                            // Script JavaScript dapat tetap sama
                            document.addEventListener("DOMContentLoaded", () => {
                                let kmCounts = @json($kmCounts);
                                let kmTotal = kmCounts.reduce(function(total, item) {
                                    return total + item.total;
                                }, 0);
                                let percentage = (kmTotal / (kmCounts.length * 100)) * 100;
                                document.querySelector(".progress-bar").style.width = percentage + "%";
                                document.querySelector(".progress-bar").setAttribute("aria-valuenow", percentage);
                            });
                        </script>
                    </div>
                </div>
            </div><!-- End Hasil Nilai Kuesioner KM -->

                <!-- Komponen 2: Hasil Nilai Kuesioner RM -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Nilai RM</h5>
                            <span class="pull-right">80</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="132"></div>
                            </div>
                            <script>
                                // Script JavaScript dapat tetap sama
                                document.addEventListener("DOMContentLoaded", () => {
                                    let kmCounts = @json($kmCounts);
                                    let kmTotal = kmCounts.reduce(function(total, item) {
                                        return total + item.total;
                                    }, 0);
                                    let percentage = (kmTotal / (kmCounts.length * 100)) * 100;
                                    document.querySelector(".progress-bar").style.width = percentage + "%";
                                    document.querySelector(".progress-bar").setAttribute("aria-valuenow", percentage);
                                });
                            </script>
                        </div>
                    </div>
                </div><!-- End Hasil Nilai Kuesioner RM -->

                <!-- Komponen 3: Rangkuman -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Rangkuman</h5>
                            <!-- Tambahkan rangkuman seperti "Low / Medium / High" -->
                            <ul>
                                {{-- @foreach ($rangkuman as $item)
                                <li>{{ $item->keterangan }}</li>
                                @endforeach --}}
                            </ul>
                        </div>
                    </div>
                </div><!-- End Rangkuman -->

                <!-- Komponen 4: Histori Pengisian Kuesioner -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Histori Pengisian Kuesioner</h5>
                            <ul>
                                @foreach ($historiPengisian as $item)
                                <li>{{ $item->created_at }} - {{ $item->km_class }} / {{ $item->rm_class }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div><!-- End Histori Pengisian Kuesioner -->

                <!-- Komponen 5: Penjelasan KM -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Penjelasan KM</h5>
                            <!-- Tambahkan penjelasan tentang KM di sini -->
                            <p>Knowledge of Metacognitif (KM) merupakan pengetahun individu terhadap kognitifnya. Knowledge of metacognitive terdiri dari pengetahuan prosedural yang merupakan pengetahuan bagaimana seseorang melakukan sesuatu, pengetahuan deklaratif mencakup pengetahuan tentang kegiatan yang akan dilakukan sebagai pembelajar dan apa yang mempengaruhi kegiatannya, pengdeklaratif, dan kondisional, serta pengetahuan kondisional yakni pengetahuan tentang kapan dan mengapa menggunakan pengetahuan prosedural dan deklaratif.                             </p>
                        </div>
                    </div>
                </div><!-- End Penjelasan KM -->

                <!-- Komponen 6: Penjelasan RM -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Penjelasan RM</h5>
                            <!-- Tambahkan penjelasan tentang RM di sini -->
                            <p> Regulation of Metacognitif (RM) merupakan kemampuan mengontrol pembelajaran, melakukan sesuatu atau melakukan perbaikan terhadap kesalahannya. Pembelajar mengatur kegiatan pembelajarannya dengan melibatkan perencanaan dan pengawasan terhadap aktivitas kognitif yang digunakan. Kemampuan metakognitif ini merupakan kunci bagi pengembangan berpikir kritis.</p>
                        </div>
                    </div>
                </div><!-- End Penjelasan RM -->


            </div>
        </section>

    </main><!-- End #main -->
@endsection
