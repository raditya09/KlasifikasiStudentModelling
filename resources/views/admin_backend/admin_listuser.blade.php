@extends('admin_backend/layouts.template')

@section('content')
    <main id="main" class="main">
    
    <div class="pagetitle">
    <h1>Admin Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item">User</li>
        <li class="breadcrumb-item active">List User</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>NIM</th>
                                <th>Semester</th>
                                <th>Angkatan</th>
                                <th>E-Mail</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($users as $user)
                            <tr>
                                <td><?php echo $i;?></td>
                                <td>{{ $user->nama_lengkap }}</td>
                                <td>{{ $user->nim }}</td>
                                <td>{{ $user->semester }}</td>
                                <td>{{ $user->angkatan }}</td>
                                <td>{{ $user->email }}</td>
                                <td><?php if ($user->kelas_user == 3) {
                                            echo "Mahasiswa";
                                        } ?>
                                </td>
                                <td>
                                    <form action="{{ route('adminListUser.destroy', [$user->id]) }}" class="d-inline delete-form" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm mt-1 mt-sm-0"><i class="bi bi-trash"></i>Hapus</button>
                                    </form>
                                </td>
                                <!-- Tambahkan kolom-kolom lain yang ingin Anda tampilkan -->
                            </tr>
                            <?php $i++;?>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    </section>

    </main><!-- End #main -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#sidebar-listperson").removeClass("collapsed");
            $("#users-nav").addClass("show");
            $("#sidebar-item-listuser").addClass("active");
        });

        // hapus user
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
    </script>
@endsection