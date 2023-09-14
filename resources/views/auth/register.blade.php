@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 square-size">
            <div class="card">
                <!-- <div class="card-header">{{ __('Register') }}</div> -->
                
                <div class="card-body">
                    <h3 class="fw-bolder">Buat Akunmu</h3><br>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nama_lengkap" class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama lengkap" value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus>

                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nim" class="col-md-4 col-form-label text-md-end">{{ __('NIM') }}</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" placeholder="E4xxxxx" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>

                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="semester" class="col-md-4 col-form-label text-md-end">{{ __('Semester') }}</label>

                            <div class="col-md-6">
                                <input id="semester" type="text"  placeholder="2" class="form-control @error('semester') is-invalid @enderror" name="semester" value="{{ old('semester') }}" required autocomplete="semester">

                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="angkatan" class="col-md-4 col-form-label text-md-end">{{ __('Angkatan') }}</label>

                            <div class="col-md-6">
                                <input id="angkatan" type="text"  placeholder="2021" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan" value="{{ old('angkatan') }}" required autocomplete="semester">

                                @error('angkatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text"  placeholder="xxxx@polije.ac.id" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                            <label for="kelas_user" class="col-md-4 col-form-label text-md-end">{{ __('Level Pengguna') }}</label>

                            <div class="col-md-6">
                                <input id="kelas_user" readonly = 'true' placeholder="Mahasiswa" value="3" type="text" class="form-control" name="kelas_user" required autocomplete="kelas_user">
                            </div>
                        </div> -->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Buat Akun') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-lg-8 offset-md-4">
                                Sudah mempunyai akun? <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Masuk') }}
                                </a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Right side columns -->
        <div class="col-lg-6 bg-image">
            <div class="card-body">
                <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                <div class="activity">

                    <div class="activity-item d-flex">
                    <div class="activite-label">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                        Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                        Voluptatem blanditiis blanditiis eveniet
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                        Voluptates corrupti molestias voluptatem
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                        Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label">2 days</div>
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                    <div class="activity-content">
                        Est sit eum reiciendis exercitationem
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label">4 weeks</div>
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <div class="activity-content">
                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                    </div>
                    </div><!-- End activity item-->

                </div>

                </div>
            </div><!-- End Recent Activity -->
        </div>
    </div>
</div>
@endsection
