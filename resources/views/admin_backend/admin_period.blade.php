@extends('admin_backend/layouts.template')
@section('content')
    @php
        $thisYear = date("Y");
        $lastYear = $thisYear-1;
        $nextYear = $thisYear + 1;
    @endphp
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
            
            <form action="{{ route('adminSelectPeriod.active') }}" method="POST" id="form-period">
                @csrf
                <div class="d-flex justify-content-center">
                    <div class="border border-2 rounded p-2 text-center">
                        <h6>Periode Terpilih</h6>
                        <div class="pt-2 border-bottom"><h6 style="font-weight: bold">{{ $selectPeriod->period }}</h6></div>
                        <div class="pt-2">
                            <input value="0" type="radio" class="form-check-input ms-2" id="radioTutup" name="optionActive" required>
                            <label class="form-check-label ps-1 pe-2" for="radioTutup">Tutup Kuesioner</label>
                            <input value="1" type="radio" class="form-check-input ms-2" id="radioBuka" name="optionActive">
                            <label class="form-check-label me-2 ps-1" for="radioBuka">Buka Kuesioner</label>
                        </div>
                    </div>
                </div>
            </form>

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
                                        <form action="{{ route('adminPeriod.destroy', ['admin_period'=>$period->id]) }}" data-id="{{ $period->id }}" class="d-inline delete-form" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button id="hapus" class="btn btn-outline-danger btn-sm mt-1 mt-sm-0"><i class="bi bi-trash"></i>Hapus</button>   
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('adminSelectPeriod') }}" data-id="{{ $period->id }}" method="POST" class="edit-periode">
                                            @csrf
                                            <input type="text" class="form-control d-none" name="id_periode" value="{{ $period->id }}">
                                            @if ($period->id==$selectPeriod->id_periode)
                                                <button type="button"  class="btn btn-primary btn-sm"><i class="bi bi-check-all bi-lg me-1"></i> Pilih</button>
                                            @else
                                                <button type="submit" class="btn btn-light btn-sm border"><i class="bi bi-check-lg me-1"></i> Pilih</button>
                                            @endif
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
                                    <label for="create-semester" class="col-form-label">Semester:</label>
                                    <select class="form-select" name="semester" id="create-semester">
                                        <option value="1">1. Ganjil</option>
                                        <option value="2">2. Genap</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-form-label" for="create-tahun_awal">Tahun awal:</label>
                                    <select class="form-select" name="tahun_awal" id="create-tahun_awal">
                                        <option value="{{ $lastYear }}">{{ $lastYear }}</option>
                                        <option value="{{ $thisYear }}" selected>{{ $thisYear }}</option>
                                    </select>
                                    {{-- <input type="number" class="form-control" id="create-tahun_awal" name="tahun_awal" min="2000" max="2050" value="{{ $thisYear }}"> --}}
                                    <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill"></i> Tahun tidak valid</div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-form-label" for="create-tahun_akhir">Tahun akhir:</label>
                                    <select class="form-select" id="create-tahun_akhir" name="tahun_akhir">
                                        <option value="{{ $thisYear }}">{{ $thisYear }}</option>
                                        <option value="{{ $nextYear }}" selected>{{ $nextYear }}</option>
                                    </select>
                                    {{-- <input type="number" class="form-control" id="create-tahun_akhir" name="tahun_akhir" min="2000" max="2050" value="{{ $nextYear }}"> --}}
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
                                <div class="form-group mb-4">
                                    <label class="col-form-label" for="edit-tahun_awal">Tahun awal:</label>
                                    {{-- <select class="form-select" id="edit-tahun_awal" name="tahun_awal">
                                        <option value="{{ $lastYear }}">{{ $lastYear }}</option>
                                        <option value="{{ $thisYear }}" selected>{{ $thisYear }}</option>
                                    </select> --}}
                                    <input type="number" class="form-control" id="edit-tahun_awal" name="tahun_awal" min="2000" max="2050">
                                    <div class="invalid-feedback"><i class="bi bi-exclamation-circle-fill"></i> Tahun tidak valid</div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-form-label" for="edit-tahun_akhir">Tahun akhir:</label>
                                    {{-- <select class="form-select" id="edit-tahun_akhir" name="tahun_akhir">
                                        <option value="{{ $thisYear }}">{{ $thisYear }}</option>
                                        <option value="{{ $nextYear }}" selected>{{ $nextYear }}</option>
                                    </select> --}}
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

    // check aktif periode sekarang
    let selectPeriod = {{ $selectPeriod->aktif }};
    if(selectPeriod==0){
        $("#radioTutup").prop("checked", true);
    }else{
        $("#radioBuka").prop("checked", true);
    }

    // tutup periode
    $('#radioTutup').click(function(){
        if(selectPeriod!=0){
            Swal.fire({
                title: 'Tutup kuesioner?',
                text: "Kuesioner akan dinonaktifkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, nonaktifkan ini!',
                cancelButtonText: 'Batalkan',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    $('#form-period').submit();
                }else{
                    $('#radioBuka').click();
                }
            });
        }
    });

    // buka periode
    $('#radioBuka').click(function(){
        if(selectPeriod!=1){
            Swal.fire({
                title: 'Aktifkan kuesioner?',
                text: "Kuesioner untuk periode ini akan diaktifkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0d6efd',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, aktifkan ini!',
                cancelButtonText: 'Batalkan',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    $('#form-period').submit();
                }else{
                    $('#radioTutup').click();
                }
            });
        }
    });

    // edit periode
    $('.edit-button').click(function () {
        let period = $(this).data('period');
        $('#edit-semester').val(period.semester);
        $('#edit-tahun_awal').val(period.tahun.substring(0,4));
        $('#edit-tahun_akhir').val(period.tahun.substring(5,9));
        let formAction = "{{ route('adminPeriod.update', ['admin_period' => 'masuk_sini']) }}".replace('masuk_sini', period.id);
        $('#edit-form').attr('action', formAction);
    });

    // hapus
    $('.delete-form').click(function(event){
        event.preventDefault();
        if($(this).data('id')=={{ $selectPeriod->id_periode }}){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Periode yang terpilih tidak bisa dihapus!",
                confirmButtonColor: '#0d6efd',
                confirmButtonText: 'Tutup',
            });
        }
        else{
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
        }
    });


        // ubah periode terpilih
    $('.edit-periode').click(function(event){
        event.preventDefault();
        event.preventDefault();
        if($(this).data('id')=={{ $selectPeriod->id_periode }}){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Periode tersebut sudah dipilih!",
                confirmButtonColor: '#0d6efd',
                confirmButtonText: 'Tutup',
            });
        }else{
            Swal.fire({
                title: 'Ganti Periode?',
                text: "Periode baru akan dibuka, ini akan membuat user bisa mengisi kuesioner baru!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0d6efd',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, ubah periode!',
                cancelButtonText: 'Batalkan',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    $(this).submit();
                }
            });
        }
    });
    $(document).ready(function() {
        $("#sidebar-period").removeClass("collapsed");
        firstYear($('#create-tahun_awal'), $('#create-tahun_akhir'));
        secondYear($('#create-tahun_akhir'), $('#create-tahun_awal'));
        firstYear($('#edit-tahun_awal'), $('#edit-tahun_akhir'));
        secondYear($('#edit-tahun_akhir'), $('#edit-tahun_awal'));
    });

    // event select year
    function firstYear($selectTahunAwal, $selectTahunAkhir) {
        $selectTahunAwal.on('change', function() {
            const selectedValue = $selectTahunAwal.val();
            $selectTahunAkhir.val(parseInt(selectedValue)+1);
        });
    }

    function secondYear($selectTahunAwal, $selectTahunAkhir) {
        $selectTahunAwal.on('change', function() {
            const selectedValue = $selectTahunAwal.val();
            $selectTahunAkhir.val(parseInt(selectedValue)-1);
        });
    }

</script>
@endsection