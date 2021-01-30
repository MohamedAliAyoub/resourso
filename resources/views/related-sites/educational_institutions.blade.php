@extends('layouts.app')
@section('content')
<section class="educational_institutions">
<div class="container">
    <!-- partial:index.partial.html -->
    <h1 class="ribbon-title--a">مؤسسات تعليميه  ذات صله </h1>


    <!-- ============= start section    box_3_icon  =====================-->
    <div class="section_box_3_icon ">

        <div class="container">
            <div class="row">
                 <!-- <div class="col-md-4">
                    <div class="col_content_icons box_3_icon">
                        
                        <div class="content_img_related">
                         <img src="{{asset('vendors/images/related/1.png')}}">
                        </div>
                         <p class="title_hader">  وزارة التعليم </p>
                         <span class="words ">  خدمة إرشادية للوصول لمواقع المدارس التابعة لإدارة التعليم بمحافظةالمخواة  </span>
                         <button class="btn btn-info btn-block btn-lg"> <a href="https://www.my.gov.sa/wps/portal/snp/pages/agencies/agencyDetails/AC163">
                                اذهب الى الموقع
                                 <i class="fas fa-location-arrow icon_go_btn"></i>
                             </a> </button>
                     </div>
                </div> -->
                <!-- <div class="col-md-4">
                    <div class="col_content_icons box_3_icon">
                         <div class="content_img_related">
                            <img src="{{asset('vendors/images/related/2.svg')}}">
                        </div>
                        <p class="title_hader">  هيئة تقويم التعليم والتدريب  </p>
                        <span class="words ">  خدمة إرشادية للوصول لمواقع المدارس التابعة لإدارة التعليم بمحافظةالمخواة  </span>
                        <button class="btn btn-info btn-block btn-lg"> <a href="https://departments.moe.gov.sa/resources/Pages/default.aspx">

                                اذهب الى الموقع
                                <i class="fas fa-location-arrow icon_go_btn"></i>

                            </a> </button>
                    </div>
                </div> -->
                <!-- <div class="col-md-4">
                    <div class="col_content_icons box_3_icon">
                        <div class="content_img_related">
                            <img src="{{asset('vendors/images/related/1.png')}}">
                        </div>
                        <p class="title_hader">إدارة مصادر التعلم والمكتبات المدرسية  </p>
                        <span class="words ">  خدمة إرشادية للوصول لمواقع المدارس التابعة لإدارة التعليم بمحافظةالمخواة  </span>
                        <button class="btn btn-info btn-block btn-lg"> <a href="https://www.etec.gov.sa/ar/Pages/default.aspx">
                               اذهب الى الموقع
                                <i class="fas fa-location-arrow icon_go_btn"></i>
                            </a> </button>
                    </div>
                </div>  -->
                
                @foreach($educationalInstitution as $education)
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


            </div>
        </div><!--container -->
    </div><!--section box_3_icon  -->
    <!-- ============= End   section  box_3_icon  =======================-->





    <div class="row">
    </div><!-- row -->
</div><!-- container -->
</section><!-- educational_institutions -->
@endsection
