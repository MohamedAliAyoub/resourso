@extends('layouts.app')
@section('content')
<section class="educational_institutions">
<div class="container">
    <!-- partial:index.partial.html -->
    <h1 class="ribbon-title--a">       <i class="fa fa-star"></i> جمعيات علميه  </h1>


    <!-- ============= start section    box_3_icon  =====================-->
    <div class="section_box_3_icon ">

        <div class="container">
            <div class="row">
                <!-- <div class="col-md-6">
                    <div class="col_content_icons box_3_icon">
                        
                        <div class="content_img_related">
                            <img src="{{asset('vendors/images/related/23.png')}}"  >
                         </div>
                         <p class="title_hader"> الجمعية السعودية للعلوم التربوية والنفسية (  جستن )  </p>
                        <span class="words d-none-">  خدمة إرشادية للوصول لمواقع المدارس التابعة لإدارة التعليم بمحافظةالمخواة  </span>

                          <button class="btn btn-info btn-block btn-lg">

                             <a href="http://www.alyaseer.net/vb/index.php">
                                اذهب الى الجمعية  الان
                                 <i class="fas fa-location-arrow icon_go_btn"></i>
                             </a> </button>
                     </div>
                </div> -->
                
                @foreach($educational_sciences as $education)
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