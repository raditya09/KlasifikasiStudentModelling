@extends('admin_backend/layouts.template')

@section('content')
    <main id="main" class="main">

    <div class="pagetitle">
    <h1>Admin Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item active">List User</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">
        <h3>List User</h3>
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