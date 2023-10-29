@extends('admin_backend/layouts.template')

@section('content')
    <main id="main" class="main">

    <div class="pagetitle">
    <h1>Admin Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Admin Dashboard</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <div class="container-fluid row">
            <!-- RM Pie Chart -->
            <div class="col-6">
                <div class=" card">
                    <div class="card-body">
                        <h5 class="card-title">Knowledge of Metacognitif (KM)</h5>
                        <div id="kmPieChart"></div>
                        <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            let kmCounts = @json($kmCounts);

                            let kmClass = kmCounts.map(function(item) {
                                return item.km_class.toString();
                            });
                            let kmTotal = kmCounts.map(function(item) {
                                return item.total;
                            });
                            new ApexCharts(document.querySelector("#kmPieChart"), {
                            series: kmTotal,
                            chart: {
                                height: 350,
                                type: 'pie',
                                toolbar: {
                                show: false
                                }
                            },
                            labels: ['High', 'Medium', 'Low'],
                            colors: ['#00e396', '#F8DC1A', '#FA240C']
                            }).render();
                        });
                        </script>
                    </div>
                </div>
            </div>

            <!-- KM Pie Chart -->
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Regulation of Metacognitif (RM)</h5>
                        <div id="rmPieChart"></div>
                        <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            let rmCounts = @json($rmCounts);

                            let rmClass = rmCounts.map(function(item) {
                                return item.rm_class.toString();
                            });
                            let rmTotal = rmCounts.map(function(item) {
                                return item.total;
                            });
                            new ApexCharts(document.querySelector("#rmPieChart"), {
                            series: [13, 43, 22],
                            chart: {
                                height: 350,
                                type: 'pie',
                                toolbar: {
                                show: false
                                }
                            },
                            labels: ['High', 'Medium', 'Low'],
                            colors: ['#00e396', '#F8DC1A', '#FA240C']
                            }).render();
                        });
                        </script>
                    </div>
                </div>
            </div>
            

        </div>

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Mahasiswa per Angkatan</h5>
                    <div id="barChart"></div>
        
                    <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        let angkatanCounts = @json($angkatanCounts);

                        let categories = angkatanCounts.map(function(item) {
                            return item.angkatan.toString();
                        });
                        let data = angkatanCounts.map(function(item) {
                            return item.total;
                        });
                        new ApexCharts(document.querySelector("#barChart"), {
                        series: [{
                            data: data
                        }],
                        chart: {
                            type: 'bar',
                            // height: 400,
                            toolbar: {
                                show: false
                            }
                        },
                        plotOptions: {
                            bar: {
                            borderRadius: 4,
                            horizontal: true,
                            }
                        },
                        dataLabels: {
                            enabled: true, // Aktifkan dataLabels
                            formatter: function(val) {
                            return val; // Menampilkan nilai data pada teks
                            }
                        },
                        xaxis: {
                            categories: categories,
                        }
                        }).render();
                    });
                    </script>
                    <!-- End Bar Chart -->
                </div>
            </div>
        </div>

    </section>

    </main>
    <!-- End #main -->
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $("#sidebar-dashboard").removeClass("collapsed");
    });
</script>
@endsection
