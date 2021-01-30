<div class="sidebar-menu" >
 <header class="logo">
  <a href="#" class="d-none  sidebar-icon">
   <span class="fa fa-bars"></span>
  </a>
  <a href="index.blade.php">
   <span id="logo" class=" d-none far fa-user-circle"></span>
   <img class="  icon_user  fa-5x" src="{{asset('vendors/images/icons_sidbar/user5.svg')}}">

   <!--<img id="logo" src="" alt="Logo"/>-->
  </a>
 </header>

 <div class="menu">
  <ul id="menu" >
   <li id="menu-comunicacao li_sub" ><a href="#">
      <img class="img_icon_right_sidbar " src="{{asset('vendors/images/icons_sidbar/5.png')}}">

     <span> التطوير المهنى</span><span class="fa fa-angle-left" ></span>
    </a>
    <ul id="menu-comunicacao-sub" >
     <li id="menu-mensagens" style="width:auto" >
      <a href="#">
       تعلم وتعليم
       <i class="fa fa-angle-left icon_sup_left"></i>
      </a>
      <ul id="menu-mensagens-sub" >

       <li><a href="{{route('create_courses')}}"> انتاج الدروس </a></li>
       <li><a href="form2.blade.php"> التعلم النشط  </a></li>
      </ul>
     </li>


     <li id="menu-mensagens" style="width:auto" >
      <a href="#">
       التدريب
       <i class="fa fa-angle-left icon_sup_left"></i>
      </a>
      <ul id="menu-mensagens-sub" >
       <li id="menu-mensagens" style="width:auto" >
        <a href="#">
         حقائق تدربيه
         <i class="fa fa-angle-left icon_sup_left"></i>
        </a>
        <ul id="menu-mensagens-sub" >
         <li><a href="active_link2.blade.php">   مهارات البحث ومصادر المعلومات   </a></li>
         <li><a href="active_link3.blade.php"> التعليم الالكترونى وتقنيات التعلم  </a></li>
         <li><a href="active_link4.blade.php"> القياده والاداره     </a></li>
         <li><a href="active_link5.blade.php"> تطوير الذات     </a></li>
        </ul>
       </li>
       <li><a href="active_link2.blade.php">  نشرات تربوية  </a></li>
       <li><a href="active_link3.blade.php"> قاعه التدريب   </a></li>
      </ul>
     </li>
     <li id="menu-mensagens" style="width:auto" >
      <a href="#">
       لوائح وتعاميم
       <i class="fa fa-angle-left icon_sup_left"></i>
      </a>
      <ul id="menu-mensagens-sub" >
       <li id="menu-mensagens" style="width:auto" >
        <a href="#">
         التعاميم
         <i class="fa fa-angle-left icon_sup_left"></i>
        </a>
        <ul id="menu-mensagens-sub" >
         <li><a href="active_link2.blade.php">   مهارات البحث ومصادر المعلومات   </a></li>
         <li><a href="active_link3.blade.php"> التعليم الالكترونى وتقنيات التعلم  </a></li>
         <li><a href="active_link4.blade.php"> القياده والاداره     </a></li>
         <li><a href="active_link5.blade.php"> تطوير الذات     </a></li>
        </ul>
       </li>
       <li><a href="active_link2.blade.php">  نشرات تربوية  </a></li>
       <li><a href="active_link3.blade.php"> قاعه التدريب   </a></li>
      </ul>
     </li>
     <li id="menu-mensagens" style="width:auto" >
      <a href="#">
       دراسات وبحوث
       <i class="fa fa-angle-left icon_sup_left"></i>
      </a>
      <ul id="menu-mensagens-sub" >
       <li><a href="active_link2.blade.php"> بحوث محكمة  </a></li>
       <li><a href="active_link3.blade.php"> أوراق عمل  </a></li>
       <li><a href="active_link3.blade.php"> رسائل علمية  </a></li>
       <li><a href="active_link3.blade.php"> بحوث إجرائية </a></li>
      </ul>
     </li>

     <li id="menu-arquivos" ><a href="search_engines.blade.php">محركات البحث  </a></li>
     <li id="menu-arquivos" ><a href="#">منتديات وملتقيات</a></li>

     <li id="menu-arquivos" ><a href="#"> دوريات محكمه</a></li>
     <li id="menu-arquivos" ><a href="#"> جمعيات علميه </a></li>
    </ul>
   </li>
   <li id="menu-comunicacao li_sub" ><a href="#">

     <img class="img_icon_right_sidbar icon_related " src="{{asset('vendors/images/icons_sidbar/2.png')}}">

     <span>مواقع ذات صله </span><span class="fa fa-angle-left" ></span>
    </a>
    <ul id="menu-comunicacao-sub" >
     <li id="menu-arquivos" ><a href="{{ route('educational_institutions') }}">مؤسسات تعليمية</a></li>
     <li id="menu-arquivos" ><a href="{{ route('virtual_school') }}"> المدرسة اإلفتراضية  </a></li>
     <li id="menu-mensagens" style="width:auto" >
      <a href="#">
       مواقع علميه
       <i class="fa fa-angle-left icon_sup_left"></i>
      </a>
      <ul id="menu-mensagens-sub" >
       <li id="menu-mensagens-enviadas" ><a href="{{ route('libraries') }}">مكتبات</a></li>
       <li id="menu-mensagens-recebidas" ><a href="{{ route('libraries2') }}">منصات تدربيه </a></li>
      </ul>
     </li>
     
     <li id="menu-arquivos" ><a href="{{ route('search_engines') }}">محركات البحث  </a></li>
     <li id="menu-arquivos" ><a href="{{ route('forums_and_forums') }}"> منتديات وملتقيات</a></li>
     
     <li id="menu-arquivos" ><a href="{{ route('professional_gatherings') }}"> تجمعات مهنية</a></li>
     <li id="menu-arquivos" ><a href="{{ route('educational_sciences') }}"> جمعيات علميه </a></li>
    </ul>
   </li>
   <li id="menu-home" ><a href="{{route('under_construction')}}">
         <img class="img_icon_right_sidbar " src="{{asset('vendors/images/icons_sidbar/6.png')}}">
       <span>  نظم مصادر التعلم</span></a>
   </li>



   <li><a href="#">
      <img class="img_icon_right_sidbar " src="{{asset('vendors/images/icons_sidbar/4.png')}}">

     <span>مناسبات</span><span class="fa fa-angle-left" ></span></a>
    <ul>
     <li><a href="{{route('events2')}}"> <i class="fab fa-gratipay"></i>  وطنية   </a></li>
     <li><a href="{{route('events')}}"><i class="fas fa-globe-africa"></i>  عالمية </a></li>

    </ul>
   </li>

   <li><a href="#">
      <img class="img_icon_right_sidbar    " src="{{asset('vendors/images/icons_sidbar/5.png')}}">

     <span> صفحات الطالب </span><span class="fa fa-angle-left" ></span></a>
    <ul>
     <li><a href="profile.blade.php"><i class="fa fa-facebook"></i> الف الشخصى    </a></li>
     <li><a href="{{route('register')}}"><i class="fa fa-facebook"></i>تسجيل فى الموقع   </a></li>
     <li><a href="{{route('login')}}"><i class="fa fa-twitter"></i> تسجيل الدخول </a></li>
    </ul>
   </li>

  </ul>
 </div>
</div>
