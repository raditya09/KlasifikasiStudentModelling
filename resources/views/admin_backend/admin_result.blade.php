@extends('admin_backend/layouts.template')
@section('content')
    <main id="main" class="main bg-white">
        <div>
            <h4 style="font-weight: bold">Hasil Kategori Metakognitif</h4>
            <p class="text-secondary fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, tempora.</p>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="table-light">
                    <th>NAMA</th>
                    <th>ANGKATAN</th>
                    <th>TANGGAL</th>
                    <th>RM</th>
                    <th>KM</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                        <tr>
                            <td style="font-weight: bold">{{ $result->user->nama_lengkap }}</td>
                            <td>{{ $result->user->angkatan }}</td>
                            <td>{{ $result->formatted_created_at }}</td>
                            <td>{{ $result->rm_total }}</td>
                            <td>{{ $result->km_total }}</td>
                            <td><button class="btn btn-primary btn-sm">Download</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection

@section('script')

@endsection