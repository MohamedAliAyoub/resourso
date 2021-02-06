<div class="sidebar-menu" >
 <header class="logo">
  <a href="#" class="d-none  sidebar-icon">
   <span class="fa fa-bars"></span>
  </a>
  <a href="profile.blade.php">
   <span id="logo" class=" d-none far fa-user-circle"></span>
   <img class="  icon_user  fa-5x" src="{{ asset ( 'vendors/images/icons_sidbar/user5.svg ') }} ">
   <p class="student_name_bottom_logo">student name </p>
   <!--<img id="logo" src="" alt="Logo"/>-->
  </a>
 </header>
 <div class="container_dropdown_menye_home">

  <ul class="mcd-menu">
   <li>
    <a href="#">
     <img class="img_icon_right_sidbar " src="{{ asset ( 'vendors/images/icons_sidbar/5.png ') }}">
     <span> التطوير المهنى</span><span class="fa fa-angle-left" ></span>
    </a>

    <ul>
     <li>
      <a href="#">   <i class="fa fa-angle-left icon_sup_left"></i>التعليم والتعلم    </a>
      <ul>
       <li>
        <a href="{{route('educational_lessons')}}">   <i class="fa fa-angle-left icon_sup_left"></i>  انتاج الدروس</a>
        <ul>
         <li><a href="{{route('educational_lessons')}}"> دروس تعليميه</a></li>
         <li><a href="{{route('practical_lessons')}}"> دروس تطبيقيه</a></li>
        </ul>
       </li>
       <li><a href="{{route('active_learning')}}">التعلم النشط  </a></li>
      </ul>
     </li>
     <li>

      <a href="#">   <i class="fa fa-angle-left icon_sup_left"></i>التدريب   </a>
      <ul>
       <li>
        <a href="#">    <i class="fa fa-angle-left icon_sup_left"></i> حقائب تدريبية </a>
        <ul>
         <li><a href=" {{route('training1')}} ">   مهارات البحث ومصادر المعلومات   </a></li>
         <li><a href="{{route('training2')}}">   التعليم الالكترونى وتقنيات التعلم  </a></li>
         <li><a href="{{route('training6')}}">    القياده والاداره     </a></li>
         <li><a href="{{route('training7')}}">    تطوير الذات     </a></li>
        </ul>
       </li>
       <li><a href="{{route('training4')}}">  نشرات تربوية  </a></li>
       <li><a href="{{route('training5')}}"> قاعه التدريب   </a></li>
      </ul>
     </li>
     <li>
      <a href="#">  <i class="fa fa-angle-left icon_sup_left"></i>   دراسات وبحوث </a>


      <ul>

       <li><a href="{{route('researches1')}}"> أوراق عمل  </a></li>
       <li><a href="{{route('researches2')}}"> رسائل علمية  </a></li>
       <li><a href="{{route('researches3')}}"> بحوث إجرائية </a></li>      </ul>
     </li>

     <li>
      <a href="#">  <i class="fa fa-angle-left icon_sup_left"></i> نماذج    </a>
      <ul>
       <li><a >    <i class="fa fa-angle-left icon_sup_left"></i>  نماذج خطط  </a>
        <ul> 
         <li><a href="{{route('model1')}}"> خطة تفصيلية</a></li>
         <li><a href="{{route('model2')}}"> خطة تشغيلية</a></li>

         </li>

        </ul>
       </li>
       <li><a  >       <i class="fa fa-angle-left icon_sup_left"></i> نماذج تقارير  </a>
        <ul>

         <li><a href="{{route('model3')}}">تقارير دورية </a></li>
         <li><a href="{{route('model4')}}"> تقارير ختامية</a></li>
         <li><a href="{{route('model5')}}"> تقارير أخرى</a></li>

         </li>

        </ul>
       </li>
       <li><a  >       <i class="fa fa-angle-left icon_sup_left"></i>نماذج العهدة  </a>
        <ul>

         <li><a href="{{route('model6')}}"> محضر نقل عهده   </a></li>
         <li><a href="{{route('model7')}}">  محضر فقد واتالف </a></li>
         <li><a href="{{route('model8')}}">  محضر سحب رجيع </a></li>
         <li><a href="{{route('model9')}}"> نموذج األثاث الزائد </a></li>
         <li><a href="{{route('model10')}}"> نموذج نقل المركز </a></li>

         </li>

        </ul>
       </li>
       <li><a href="{{route('model11')}}">  نماذج  اخرى      </a></li>
       <li><a href="{{route('model12')}}">  نماذج من اختبارات المرشحين  </a></li>
      </ul>
     </li>

     <li id="menu-mensagens" style="width:auto" >
      <a href="#">
       استمارات
       <i class="fa fa-angle-left icon_sup_left"></i>
      </a>
      <ul id="menu-mensagens-sub" >
       <li class="menu_sup_down_li"><a href="anonymous.blade.php"> استمارة تبادل زيارة      </a></li>
       <li class="menu_sup_down_li"><a href="anonymous.blade.php">   استمارة زيارة مركز       </a></li>
       <li class="menu_sup_down_li"><a href="anonymous.blade.php">  استمارة تقويم األداءالوظيفي </a></li>
       <li class="menu_sup_down_li"><a href="anonymous.blade.php"> استمارة تقييم برنامج تدريبي </a></li>
       <li class="menu_sup_down_li"><a href="anonymous.blade.php">  استمارة توثيق برنامج تدريبي  </a></li>
       <li class="menu_sup_down_li"><a href="anonymous.blade.php">  استمارة طلب إنهاء تكليف  </a></li>
      </ul>
     </li>


     <li>
      <a href="#">  <i class="fa fa-angle-left icon_sup_left"></i>  لوائح و تعاميم       </a>
      <ul>
       <li><a  >     <i class="fa fa-angle-left icon_sup_left"></i>الوائح   </a>
        <ul>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">   الئحة شاغلي الوظائف التعليمية        </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">   الئحة التشكيالت المدرسية        </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">  مدونةقواعد السلوك الوظيفي وأخالقيات الوظيفة العامة  </a></li>
         </li>
        </ul>
       </li>
       <li><a  >       <i class="fa fa-angle-left icon_sup_left"></i>   التعاميم  </a>
        <ul class="ul_size_ucstom">
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">  الترشيح لعمل أمين مصادر  </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php"> منع استخدام المصادر كقاعة دراسية </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">    تفعيل مراكز مصادر التعلم  </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php"> استخدام أجهزة مراكز مصادر التعلم </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">  تفعيل نظام نور  </a></li>
         </li>

        </ul>
       </li>

      </ul>
     </li>

     <li>
      <a href="#">  <i class="fa fa-angle-left icon_sup_left"></i>  أدلة ووثائق        </a>
      <ul>
       <li><a  >      <i class="fa fa-angle-left icon_sup_left"></i>  ادلة</a>
        <ul>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">  دليل مصادر التعلم </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php"> الدليل اإلجرائي</a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php"> الدليل التنظيمي   </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">  الدليل اإلرشادي للمكتبة المدرسية </a></li>
         </li>
        </ul>
       </li>
       <li><a  >       <i class="fa fa-angle-left icon_sup_left"></i>   وثائق  </a>
        <ul class="ul_size_ucstom">
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">  الترشيح لعمل أمين مصادر  </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php"> منع استخدام المصادر كقاعة دراسية </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">    تفعيل مراكز مصادر التعلم  </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php"> استخدام أجهزة مراكز مصادر التعلم </a></li>
         <li class="menu_sup_down_li"><a href="anonymous.blade.php">  تفعيل نظام نور  </a></li>
         </li>
        </ul>
       </li>
      </ul>
     </li>
    </ul>
   </li>
  </ul>
  </li>
  </ul>
  <ul class="mcd-menu">
   <li id="menu-home" ><a href="{{route('under_construction')}}">
     <img class="img_icon_right_sidbar learning_resource_systems " src="{{ asset ( 'vendors/images/icons_sidbar/6.png ') }}">
     <span  style="font-size: 13px">{ قيد الانشاء }</span>
     <span>  نظم مصادر التعلم</span>
    </a>
   </li>
  </ul>

  <ul class="mcd-menu ">
   <li>
    <a href="#">
     <img class="img_icon_right_sidbar " src="{{ asset ( 'vendors/images/icons_sidbar/5.png ') }}">
     <span> مواقع ذات صله  </span><span class="fa fa-angle-left" ></span>
    </a>
    <ul class="ul_related_wep">
     <li id="menu-arquivos" ><a href="{{ route('educational_institutions') }}">مؤسسات تعليمية</a></li>
     <li id="menu-arquivos" ><a href="{{ route('virtual_school') }}"> المدرسة اإلفتراضية  </a></li>
     <li>
      <a href="#">   <i class="fa fa-angle-left icon_sup_left"></i>   مواقع علميه    </a>
      <ul>
       <li id="menu-mensagens-enviadas" ><a href="{{ route('libraries') }}">مكتبات</a></li>
       <li id="menu-mensagens-recebidas" ><a href="{{ route('libraries2') }}">منصات تدربيه </a></li>
      </ul>
     </li>
     <li id="menu-arquivos" ><a href="{{ route('search_engines') }}">محركات البحث  </a></li>
     <li id="menu-arquivos" ><a href="{{ route('forums_and_forums') }}"> منتديات وملتقيات</a></li>
     <li id="menu-arquivos" ><a href="{{ route('professional_gatherings') }}"> تجمعات مهنية</a></li>
     <li id="menu-arquivos" ><a href="court_patrols.blade.php"> دوريات محكمة  </a></li>
     <li id="menu-arquivos" ><a href="{{ route('educational_sciences') }}"> جمعيات علميه </a></li>
    </ul>
   </li>
  </ul>
  </li>
  </ul>

  <ul class="mcd-menu">
   <li>
    <a href="#">
     <img class="img_icon_right_sidbar " src="{{ asset ( 'vendors/images/icons_sidbar/4.png ') }}">
     <span> مناسبات</span><span class="fa fa-angle-left" ></span>
    </a>
    <ul>
     <li> <a href="{{route('events2')}}">    مناسبات وطنيه    </a></li>
     <li> <a href="{{route('events')}}">    مناسبات  عالميه    </a></li>
    </ul>
   </li>
  </ul>

 </div>
</div>
