@extends('admin_backend/layouts.template')

@section('content')
    <main id="main" class="main">
    
    <div class="pagetitle">
    <h1>Admin Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item">User</li>
        <li class="breadcrumb-item active">List Admin</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">
        <h3>List Admin</h3>
        <button class="col-md-2" id="addUserButton">Tambah Admin</button>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
        <script>
            // Script untuk menampilkan kotak dialog ketika tombol diklik
            document.getElementById('addUserButton').addEventListener('click', () => {
                Swal.fire({
                    title: 'Tambah Admin Baru',
                    html:
                        '<input id="nama_lengkap" class="swal2-input" placeholder="Nama Lengkap">' +
                        '<input id="nip" class="swal2-input" placeholder="NIM">' +
                        '<input id="email" class="swal2-input" placeholder="Email">'+
                        '<input id="password" class="swal2-input" placeholder="Password">',
                    focusConfirm: false,
                    preConfirm: () => {
                        const nama_lengkap = Swal.getPopup().querySelector('#nama_lengkap').value;
                        const nip = Swal.getPopup().querySelector('#nim').value;
                        const email = Swal.getPopup().querySelector('#email').value;
                        const password = Swal.getPopup().querySelector('#password').value;
                        return { nama_lengkap: nama_lengkap, nim:nim, semester:semester, angkatan:angkatan, email: email, password:password };
                    }
                }).then((result) => {
                    if (result.isConfirmed && result.value.nama_lengkap && result.value.nim && result.value.semester && result.value.angkatan && result.value.email && result.value.password) {
                        // Kirim data user ke server menggunakan AJAX atau formulir biasa
                        // Contoh: Anda dapat menggunakan Axios untuk AJAX
                        axios.post('/listadmin', {
                            nama_lengkap: result.value.nama_lengkap,
                            nip: result.value.nim,
                            email: result.value.email,
                            password: result.value.password,
                            kelas_user: '2',
                            _token: '{{ csrf_token() }}'
                        })
                        .then(() => {
                            location.reload(); // Muat ulang halaman setelah menambahkan user
                        })
                        .catch((error) => {
                            console.error(error);
                            Swal.fire('Error', 'Terjadi kesalahan saat menambahkan admin.', 'error');
                        });
                    }
                });
            });
        </script>

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>Semester</th>
                    <th>Angkatan</th>
                    <th>E-Mail</th>
                    <th>Role</th>

                    <!-- Tambahkan kolom-kolom lain yang ingin Anda tampilkan -->
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->nama_lengkap }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->semester }}</td>
                    <td>{{ $user->angkatan }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->kelas_user }}</td>
                    <!-- Tambahkan kolom-kolom lain yang ingin Anda tampilkan -->
                </tr>
                @endforeach
            </tbody>
        </table>
        

    </div>
    </section>

    </main><!-- End #main -->
@endsection