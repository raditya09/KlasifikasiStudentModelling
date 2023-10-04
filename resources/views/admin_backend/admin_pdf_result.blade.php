<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{config('app.name')}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin_backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


  <link href="{{ asset('admin_backend/assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="bg-white">

    <div class="container py-5">
        <div class="row pb-1">
            <div class="col-4 col-sm-3 col-md-2" style="font-weight: bold;">Nama</div>
            <div class="col-1" style="font-weight: bold">:</div>
            <div class="col-7 col-sm-8 col-md-9">{{ $result->user->nama_lengkap }}</div>
        </div>
        <div class="row pb-1">
            <div class="col-4 col-sm-3 col-md-2" style="font-weight: bold;">Nim</div>
            <div class="col-1" style="font-weight: bold">:</div>
            <div class="col-7 col-sm-8 col-md-9">{{ $result->user->nim }}</div>
        </div>
        <div class="row pb-1">
            <div class="col-4 col-sm-3 col-md-2" style="font-weight: bold;">Golongan</div>
            <div class="col-1" style="font-weight: bold">:</div>
            <div class="col-7 col-sm-8 col-md-9">{{ $result->user->kelas_user }}</div>
        </div>
        <div class="row pb-4">
            <div class="col-4 col-sm-3 col-md-2" style="font-weight: bold;">Jurusan</div>
            <div class="col-1" style="font-weight: bold">:</div>
            <div class="col-7 col-sm-8 col-md-9">Teknologi Informasi</div>
        </div>
        <h5 style="font-weight: bold">Knowledge of Metacognitif(KM)</h5>
        <div>
            <table class="table table-bordered">
                <thead>
                    <th colspan="3">Total skor : {{ $result->km_total }}</th>
                </thead>
                <thead>
                    <th colspan="3">Kelas skor : {{ $result->km_class }}</th>
                </thead>
                <thead>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nilai</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Declarative Knowledge</td>
                        <td>{{ $result->declarative_knowledge }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Procedural Knowledge</td>
                        <td>{{ $result->procedural_knowledge }}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Conditional Knowledge</td>
                        <td>{{ $result->conditional_knowledge }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h5 style="font-weight: bold" class="pt-5">Regulation of Metacognitif(RM)</h5>
        <div>
            <table class="table table-bordered">
                <thead>
                    <th colspan="3">Total skor : {{ $result->rm_total }}</th>
                </thead>
                <thead>
                    <th colspan="3">Kelas skor : {{ $result->rm_class }}</th>
                </thead>
                <thead>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nilai</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Planning</td>
                        <td>{{ $result->planning }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Information Management</td>
                        <td>{{ $result->information_management }}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Monitoring</td>
                        <td>{{ $result->monitoring }}</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Debugging</td>
                        <td>{{ $result->debugging }}</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Evaluation</td>
                        <td>{{ $result->evaluation }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


  <script src="{{ asset('js/jquery.js')}}"></script>
  <script src="{{ asset('admin_backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


  <script>
    window.print();
  </script>

</body>

</html>