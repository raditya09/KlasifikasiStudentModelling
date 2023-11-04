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

                <!-- Komponen 1: Hasil Nilai Kuesioner RM -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Nilai RM</h5>
                            <!-- Tambahkan konten di sini -->
                            <table>
                                {{-- <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    
                                </tr>
                                @foreach ($kuesionerRM as $kuesioner)
                                <tr>
                                    <td>{{ $kuesioner->id }}</td>
                                    <td>{{ $kuesioner->nama }}</td>
                                 
                                </tr>
                                @endforeach --}}
                            </table>
                        </div>
                    </div>
                </div><!-- End Hasil Nilai Kuesioner RM -->

                <!-- Komponen 2: Hasil Nilai Kuesioner KM -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Nilai KM</h5>
                            <!-- Tambahkan konten di sini-->
                            <table>
                                {{-- <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    
                                </tr>
                                @foreach ($kuesionerRM as $kuesioner)
                                <tr>
                                    <td>{{ $kuesioner->id }}</td>
                                    <td>{{ $kuesioner->nama }}</td>
                                 
                                </tr>
                                @endforeach --}}
                            </table>
                        </div>
                    </div>
                </div><!-- End Hasil Nilai Kuesioner KM -->

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
                            <!-- Tambahkan tabel atau daftar histori pengisian kuesioner di sini -->
                            <ul>
                                {{-- @foreach ($historiPengisian as $item)
                                <li>{{ $item->tanggal }} - {{ $item->keterangan }}</li>
                                @endforeach --}}
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
                            <p>KM adalah ..........</p>
                        </div>
                    </div>
                </div><!-- End Penjelasan KM -->

                <!-- Komponen 6: Penjelasan RM -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Penjelasan RM</h5>
                            <!-- Tambahkan penjelasan tentang RM di sini -->
                            <p>RM adalah............</p>
                        </div>
                    </div>
                </div><!-- End Penjelasan RM -->


            </div>
        </section>

    </main><!-- End #main -->
@endsection
