@extends('layouts.app')
@section('content')
    <section class="educational_institutions">
        <div class="container">
            <!-- partial:index.partial.html -->
            <h1 class="ribbon-title--a">       <i class="fa fa-star"></i>  محركات بحث هامه </h1>


            <!-- ============= start section    box_3_icon  =====================-->
            <div class="section_box_3_icon ">

                <div class="container">
                    <div class="row">
                        <!-- <div class="col-md-4">
                            <div class="col_content_icons box_3_icon">
                               
                                <div class="content_img_related">
                                    <img src="{{asset('vendors/images/related/15.png')}}"  >
                                </div>
                                <p class="title_hader">  محرك بحث جوجل  </p>
                                <button class="btn btn-info btn-block btn-lg">

                                    <a href="https://www.google.com">
                                        اذهب الى الموقع الان
                                        <i class="fas fa-location-arrow icon_go_btn"></i>
                                    </a> </button>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-4">
                            <div class="col_content_icons box_3_icon">
                                <div class="content_img_related">
                                    <img src="{{asset('vendors/images/related/17.png')}}"   >
                                </div>                        <p class="title_hader">  محرك بحث فايرفوكس    </p>
                                <button class="btn btn-info btn-block btn-lg">
                                    <a href="https://support.mozilla.org/ar/">

                                        اذهب الى الموقع الان
                                        <i class="fas fa-location-arrow icon_go_btn"></i>

                                    </a> </button>
                            </div>
                        </div> -->
                        @foreach($search_engines as $education)
                            <div class="col-md-4">
                                <div class="col_content_icons box_3_icon">
                                    <div class="content_img_related">
                                        <img src="{{asset('storage/'.$education->image)}}">
                                    </div>
                                    <p class="title_hader">{{$education->title}}</p>
                                    <span class="words ">  {{$education->description}}  </span>
                                    <button class="btn btn-info btn-block btn-lg"> <a href="{{$education->url}}">
                                            اذهب الى الموقع
                                            <i class="fas fa-location-arrow icon_go_btn"></i>

                                        </a> </button>
                                </div><!--col_content_icons-->
                            </div><!--col-md-4-->
                        @endforeach


                    </div><!--row-->
                </div><!--container -->
            </div><!--section box_3_icon  -->
            <!-- ============= End   section  box_3_icon  =======================-->





            <div class="row">
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- educational_institutions -->
@endsection