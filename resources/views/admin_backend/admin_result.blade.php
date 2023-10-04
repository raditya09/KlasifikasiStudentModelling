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
                    <th>HASIL</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold">Fajar Gunawan</td>
                        <td>2021</td>
                        <td>Apr 23, 2023</td>
                        <td>lorem ipsum</td>
                        <td><button class="btn btn-primary btn-sm">Download</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection

@section('script')

@endsection