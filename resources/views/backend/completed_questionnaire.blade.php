@extends('backend/layouts.template')
@section('content')
     <main id="main" class="main bg-white">
        <div class="bg-white p-3 text-center">
            <div class="d-flex justify-content-center w-100">
                <div class="col-lg-5 col-xl-5 col-md-8 col-sm-8 col-12 d-flex">
                    <img src="{{ asset('admin_backend/assets/img/completed_quiestionnaire.svg') }}" alt="" style="max-width:100%; max-height:100%;">
                </div>
            </div>
            <h4 class="font-bold pt-4">Anda telah mengisikan kuesioner!</h4>
            <p class="pt-1 text-secondary">Anda telah berhasil menyelesaikan kuesioner yang telah kami sediakan. Terima kasih atas partisipasi Anda dalam memberikan masukan penting kepada kami.</p>
        </div>
     </main>
 @endsection
 
 @section('script')
 <script>
    $(document).ready(function() {
        $("#sidebar-questionnaire").removeClass("collapsed");
    });
 </script>
@endsection