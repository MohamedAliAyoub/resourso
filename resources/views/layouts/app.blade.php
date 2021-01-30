@include('layouts/header')
<main class="py-4">
    @include('layouts/section_header')
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/slick/slick.css')}}">
  <!-- bootstrap-touchspin css -->
  <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}">

        <div class="main-container">    
            @yield('content')
        </div>            
    @include('layouts/section_footer')

</main>
@include('layouts/footer')
<script src="{{asset('src/plugins/slick/slick.min.js')}}"></script>
<!-- bootstrap-touchspin js -->
<script src="{{asset('src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
        

