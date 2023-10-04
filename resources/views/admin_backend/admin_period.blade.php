@extends('admin_backend/layouts.template')
@section('content')
    <main id="main" class="main">
        <div class="bg-white p-3">
            {{--! start header  --}}
            <div class="row">
                <div class="col-12 col-md-9">
                    <h3 style="font-weight: bold">Periode Tahun Ajar</h3>
                    <p class="text-secondary">Tambahkan periode pengajaran untuk membuka kembali kuesioner semester baru.</p>
                </div>
                <div class="mb-2 col-12 col-md-3 text-md-end align-center text-center">
                    <button class="btn btn-primary ellipsis" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Tambah Periode</button>
                </div>
            </div>
            {{--! end header  --}}
            
            <div class="d-flex justify-content-center">
                <div class="border border-2 rounded p-2 text-center">
                    <h6>Periode Terpilih</h6>
                    <div class="pt-2 border-bottom"><h6 style="font-weight: bold">{{ $selectPeriod->id_periode }}</h6></div>
                    <div class="pt-2">
                        <input value="0" type="radio" class="form-check-input ms-2" id="radioTutup" name="optionsGroup" required>
                        <label class="form-check-label ps-1 pe-2" for="radioTutup">Tutup Kuesioner</label>
                        <input value="1" type="radio" class="form-check-input ms-2" id="radioBuka" name="optionsGroup">
                        <label class="form-check-label me-2 ps-1" for="radioBuka">Buka Kuesioner</label>
                    </div>
                </div>
            </div>

            {{--! start table  --}}
            <div class="my-3 mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-light">
                            <th class="text-secondary">NO</th>
                            <th class="text-secondary">SEMESTER</th>
                            <th class="text-secondary">TAHUN</th>
                            <th class="text-secondary">ACTION</th>
                            <th class="text-secondary">PERIODE</th>
                        </thead>
                        <tbody>
                            @foreach ($periods as $index => $period)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $period->semester == 1 ? 'Ganjil' : 'Genap' }}</td>
                                    <td>{{ $period->tahun }}</td>
                                    <td>
                                        <button class="btn btn-outline-dark btn-sm edit-button" data-bs-toggle="modal" data-bs-target="#editModal" data-period='{{ json_encode($period) }}'>
                                            <i class="bi bi-pencil"></i> Edit
                                        </button>
                                        <span class="p-1"></span>
                                        <form action="{{ route('adminPeriod.destroy', ['admin_period'=>$period->id]) }}" class="d-inline delete-form" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm mt-1 mt-sm-0"><i class="bi bi-trash"></i>Hapus</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('adminSelectPeriod') }}" method="POST" class="edit-periode">
                                            @csrf
                                            <input type="text" class="form-control d-none" name="id_periode" value="{{ $period->id }}">
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-alarm"></i> Pilih</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{--! end table  --}}

            {{--! start modal create  --}}
            <form action="{{ route('adminPeriod.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Buat Periode Semester</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="create-semester" class="col-form-label">Kategori soal:</label>
                                    <select class="form-select" name="semester" id="create-semester">
                                        <option value="1">1. Ganjil</option>
                                        <option value="2">2. Genap</option>
                                    </select>
                                </div>
                                @php
                                    $thisYear = date("Y"); // Mengambil tahun saat ini
                                    $nextYear = $thisYear + 1;
                                @endphp
                                <div class="form-group mb-4">
                                    <label class="col-form-label" for="create-tahun_awal">Tahun awal:</label>
                                    <input type="number" class="form-control" id="create-tahun_awal" name="tahun_awal" min="2000" max="2050" value="{{ $thisYear }}">
                                    <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill"></i> Tahun tidak valid</div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-form-label" for="create-tahun_akhir">Tahun akhir:</label>
                                    <input type="number" class="form-control" id="create-tahun_akhir" name="tahun_akhir" min="2000" max="2050" value="{{ $nextYear }}">
                                    <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill"></i> Tahun tidak valid</div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            {{--! end modal create  --}}

            {{--! start edit modal  --}}
            <form method="POST" id="edit-form" action="{{ route('adminPeriod.update', ['admin_period' => '0']) }}" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Buat Periode Semester</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="edit-semester" class="col-form-label">Kategori soal:</label>
                                    <select class="form-select" name="semester" id="edit-semester">
                                        <option value="1">1. Ganjil</option>
                                        <option value="2">2. Genap</option>
                                    </select>
                                </div>
                                @php
                                    $thisYear = date("Y"); // Mengambil tahun saat ini
                                    $nextYear = $thisYear + 1;
                                @endphp
                                <div class="form-group mb-4">
                                    <label class="col-form-label" for="edit-tahun_awal">Tahun awal:</label>
                                    <input type="number" class="form-control" id="edit-tahun_awal" name="tahun_awal" min="2000" max="2050">
                                    <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill"></i> Tahun tidak valid</div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-form-label" for="edit-tahun_akhir">Tahun akhir:</label>
                                    <input type="number" class="form-control" id="edit-tahun_akhir" name="tahun_akhir" min="2000" max="2050" >
                                    <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill"></i> Tahun tidak valid</div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            {{--! end edit modal --}}
        </div>
    </main>
@endsection

@section('script')
<script>

    let selectPeriod = {{ $selectPeriod->aktif }};
    if(selectPeriod==0){
        $("#radioTutup").prop("checked", true);
    }else{
        $("#radioBuka").prop("checked", true);
    }

    $('.edit-button').click(function () {
        let period = $(this).data('period');
        $('#edit-semester').val(period.semester);
        $('#edit-tahun_awal').val(period.tahun.substring(0,4));
        $('#edit-tahun_akhir').val(period.tahun.substring(5,9));
        let formAction = "{{ route('adminPeriod.update', ['admin_period' => 'masuk_sini']) }}".replace('masuk_sini', period.id);
        $('#edit-form').attr('action', formAction);
    });

    $('.delete-form').click(function(event){
            event.preventDefault();
            Swal.fire({
                title: 'Yakin untuk dihapus?',
                text: "Kamu tidak akan bisa mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus ini!',
                cancelButtonText: 'Batalkan',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    $(this).submit();
                }
            })
        });

    $('.edit-periode').click(function(event){
            event.preventDefault();
            Swal.fire({
                title: 'Ganti Periode?',
                text: "Periode baru akan dibuka, ini akan membuat user bisa mengisi kuesioner baru!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ffc107',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, ubah periode!',
                cancelButtonText: 'Batalkan',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    $(this).submit();
                }
            })
        });
</script>
@endsection