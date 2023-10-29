@extends('admin_backend/layouts.template')
@section('content')
    <main class="main" id="main">
        <div>ini profile admin</div>
    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#sidebar-profile").removeClass("collapsed");
        });
    </script>
@endsection