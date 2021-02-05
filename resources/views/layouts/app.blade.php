@include('layouts/header')
    <div class="main-container content_home_page  ">
 <link rel="stylesheet" href="{{asset('plugins/calendar/dist/simple-calendar.css')}}">
 <link rel="stylesheet" href="{{asset('plugins/calendar/assets/demo.css')}}">
 <aside class="">    @include('layouts/section_header') </aside>
 <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick.css')}}">
 <!-- bootstrap-touchspin css -->
 <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/plyr/dist/plyr.css')}}">
    <!--=========================start section 3imges about us =================================--->
    



         


        <!-- <div class="main-container">     -->
            @yield('content')
        <!-- </div>             -->
    @include('layouts/section_footer')

@include('layouts/footer')
<script src="plugins/slick/slick.min.js"></script>
   <!-- bootstrap-touchspin js -->
   <script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
   <script>
    jQuery(document).ready(function() {
     jQuery('.product-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      infinite: true,
      speed: 1000,
      fade: true,
      asNavFor: '.product-slider-nav'
     });
     jQuery('.product-slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.product-slider',
      dots: false,
      infinite: true,
      arrows: false,
      speed: 1000,
      centerMode: true,
      focusOnSelect: true
     });
     $("input[name='demo3_22']").TouchSpin({
      initval: 1
     });
    });
   </script>
   <!--=========================--=================================-->
   <script src="plugins/plyr/dist/plyr.js"></script>
   <script>
    plyr.setup({
     tooltips: {
      controls: !0,
      src: 't1dFbQiIyAs',
      provider: 'youtube',
     },
    });
   </script>
   <script src="plugins/calendar/dist/jquery.simple-calendar.js"></script>
   <script>
    $(document).ready(function () {
     $("#container").simpleCalendar({
      fixedStartDay: 0, // begin weeks by sunday
      disableEmptyDetails: true,
      events: [
       // generate new event after tomorrow for one hour
       {
        startDate: new Date(new Date().setHours(new Date().getHours() + 24)).toDateString(),
        endDate: new Date(new Date().setHours(new Date().getHours() + 25)).toISOString(),
        summary: 'Visit of the Eiffel Tower'
       },
       // generate new event for yesterday at noon
       {
        startDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 12, 0)).toISOString(),
        endDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 11)).getTime(),
        summary: 'Restaurant'
       },
       // generate new event for the last two days
       {
        startDate: new Date(new Date().setHours(new Date().getHours() - 48)).toISOString(),
        endDate: new Date(new Date().setHours(new Date().getHours() - 24)).getTime(),
        summary: 'Visit of the Louvre'
       }
      ],
     });
    });
   </script>
   <!--=========================--=================================-->    

