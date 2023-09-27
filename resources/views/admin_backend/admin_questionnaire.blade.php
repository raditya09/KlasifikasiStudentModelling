@extends('admin_backend/layouts.template')
@section('content')
    <main id="main" class="main">
        <div class="bg-white p-3">
            {{--! start header --}}
            <div class="row">
                <div class="col-12 col-md-9 col-lg-10">
                    <h3 style="font-weight: bold">Soal Kuisioner</h3>
                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam fugit delectus nulla totam dolorem qui, corrupti perferendis mollitia vitae.</p>
                </div>
                <div class="mb-2 col-12 col-md-3 text-md-end align-center text-center col-lg-2">
                    <button class="btn btn-primary ellipsis" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Buat Soal Baru</button>
                </div>
            </div>
            {{--! end header  --}}

            {{--! start table  --}}
            <div class="my-3">
                <table class="table">
                    <thead class="table-light">
                        <th class="text-secondary col-1 col-md-1">NOMOR</th>
                        <th class="text-secondary col-6 col-md-8">NAMA</th>
                        <th class="text-secondary col-5 col-md-3">ACTION</th>
                    </thead>
                    <tbody>
                        @foreach ($kuesioners as $index => $kuesioner)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td class="td-ellipsis mt-1">{{ $kuesioner->soal }}</td>
                            <td>
                                {{-- <button class="btn btn-outline-dark btn-sm edit-button" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" data-soal="cobadulu"><i class="bi bi-pencil"></i>Edit</button> --}}
                                <button class="btn btn-outline-dark btn-sm edit-button" data-bs-toggle="modal" data-bs-target="#editModal" data-kuesioner='{{ json_encode($kuesioner) }}'>
                                    <i class="bi bi-pencil"></i> 
                                    Edit
                                </button>
                                <span class="p-1"></span>
                                <form action="{{ route('adminQuestionnaire.destroy', ['admin_questionnaire'=>$kuesioner->id]) }}" class="d-inline delete-form" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm mt-1 mt-sm-0"><i class="bi bi-trash"></i>Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{--! end table --}}

            {{--! start modal create  --}}
            <form action="{{ route('adminQuestionnaire.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Buat Kuesioner</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="create-kategori" class="col-form-label">Kategori soal:</label>
                                    <select class="form-select" name="create_kategori" id="create-kategori">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="create-soal" class="col-form-label">Soal:</label>
                                    <textarea class="form-control" name="create_soal" id="create-soal" rows="3" required></textarea>
                                    <div class="invalid-feedback">
                                        <i class="bi bi-exclamation-circle-fill"></i> Soal belum diisi!
                                    </div>
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
            <form method="POST" id="edit-form" action="{{ route('adminQuestionnaire.update', ['admin_questionnaire' => '1']) }}" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="edit-kategori" class="col-form-label">Kategori soal:</label>
                                    <select class="form-select" name="edit_kategori" id="edit-kategori">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="edit-soal" class="col-form-label">Soal:</label>
                                    <textarea class="form-control" name="edit_soal" id="edit-soal" rows="3" required></textarea>
                                    <div class="invalid-feedback">
                                        <i class="bi bi-exclamation-circle-fill"></i> Soal belum diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
    $(document).ready(function () {
        $('.edit-button').click(function () {
            let kuesionerData = $(this).data('kuesioner');
            $('#edit-soal').val(kuesionerData.soal);
            $('#edit-kategori').val(kuesionerData.kategori_soal);
            let formAction = "{{ route('adminQuestionnaire.update', ['admin_questionnaire' => 'masuk_sini']) }}".replace('masuk_sini', kuesionerData.id);
            $('#edit-form').attr('action', formAction);
        });

        $('.delete-form').click(function(event){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    $(this).submit();
                }
            })
        });
    });
</script>
@endsection