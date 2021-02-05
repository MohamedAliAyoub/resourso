@extends('layouts.app')
@section('content')
<div class="section_taps m_t_50">
    <!-- <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
        <div class="d-none page-header">
        <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
            <h4>Tabs</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About us </li>
            </ol>
            </nav>
        </div>
        </div>
    </div> -->
  <div class=" d-none">
   <div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
      <div class="product-wrap">
      <div class="product-detail-wrap mb-30">
       <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
         <div class="product-slider slider-arrow">
          <div class="product-slide">
           <img src="{{asset('vendors/images/product-img2.jpg')}}" alt="">
          </div>
          <div class="product-slide">
           <img src="{{asset('vendors/images/product-img1.jpg')}}" alt="">
          </div>
          <div class="product-slide">
           <img src="{{asset('vendors/images/product-img3.jpg')}}" alt="">
          </div>
          <div class="product-slide">
           <img src="{{asset('vendors/images/product-img4.jpg')}}" alt="">
          </div>
         </div>
         <div class="product-slider-nav">
          <div class="product-slide-nav">
           <img src="{{asset('vendors/images/product-img1.jpg')}}" alt="">
          </div>
          <div class="product-slide-nav">
           <img src="{{asset('vendors/images/product-img2.jpg')}}" alt="">
          </div>
          <div class="product-slide-nav">
           <img src="{{asset('vendors/images/product-img3.jpg')}}" alt="">
          </div>
          <div class="product-slide-nav">
           <img src="{{asset('vendors/images/product-img4.jpg')}}" alt="">
          </div>
         </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
         <div class="product-detail-desc pd-20 card-box height-100-p text-right section_about_page_about_us  ">
           <h3 class="title_about_section">       Vision : الرؤية  </h3>

          <p>   بيئة تقنية شاملة لمتطلبات بناء المجتمع المعرفي في مجال مصادر التعلم للمنافسة بالمخرجات التعليمية عالميًا.  </p>
           <h3 class="title_about_section">       Misson : الرسالة  </h3>
          <p>             المساهمة في بناء شخصية مهنية لأمناء وأمينات مراكز مصادر التعلم لتيسير دمج التقنية بالمناهج الدراسية وإيجاد بيئة تعليمية تعلمية محفزة للإبداع والابتكار تلبي احتياجات التنمية الشاملة للمجتمع التعليمي والمحلي.
          </p>

        <h3 class="title_about_section">       Objectives : الأهداف  </h3>
          <p>

           ١-تنمية كفايات أمين/ة مصادر التعلم  لبناء شخصية مهنية رائدة.
           ٢- تقديم الإرشاد المهني لأمين/ة مصادر التعلم.
           ٣- توفير فرص التطوير المهني النوعي والشامل والمستمر للمجتمع التعليمي.
           ٤- دمج تقنيات التعليم في المناهج الدراسية.
           ٥- إتاحة المشاركة المجتمعية في دعم العملية التعليمية.
           ٦- تحفيز الإبداع والإبتكار في مجال مصادر التعلم.

          </p>



           <div class="price">
           </div>

         </div>
        </div>
       </div>
      </div>

     </div>
    </div>

   </div>
  </div>
     <img class="d-block" src="{{asset('vendors/images/test/about.jpg')}}">

@endsection
