<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationalInstitution;
use App\VirtualSchool;
use App\Library;
use App\ScientificSociety;
use App\Groub;
use App\ProfessionalGathering;
use App\ForumsAndForum;
use App\TrainingPlatform;
use App\Occasion;
use App\Course;

class RelatedSitesController extends Controller
{
    //مؤسسات تعليمية
    public function educational_institutions()
    {
        $educationalInstitution = EducationalInstitution::paginate(15);
        // dd($educationalInstitution);
        return view('related-sites.educational_institutions', compact('educationalInstitution'));
    }

    // مدارس افتراضية 
    public function virtual_school()
    {
        $virtualSchool = VirtualSchool::paginate(15);
        //  dd($virtualSchool);

        return view('related-sites.virtual_school' , compact('virtualSchool'));
    }

    // مكتبات
    public function libraries()
    {
        $libraries = TrainingPlatform::paginate(15);
        //   dd($libraries);
        return view('related-sites.libraries',  compact('libraries'));
    }

    //منصات تدريبه
    public function libraries2()
    {
        $libraries2 = ScientificSociety::paginate(15);
        //    dd($libraries2 );
        return view('related-sites.libraries2' , compact('libraries2'));
    }

    //محركات البحث
    public function search_engines()
    {
        $search_engines = Groub::paginate(15);
        //   dd($search_engines );
        return view('related-sites.search_engines' , compact('search_engines'));
    }

     // منتديات وملتقيات 
     public function forums_and_forums()
     {    
        $forums_and_forums = ForumsAndForum::paginate(15);
        //   dd($forums_and_forums );
         return view('related-sites.forums_and_forums' , compact('forums_and_forums'));
     }

     
     //  تجمعات مهنية 
     public function professional_gatherings()
     {
        $professional_gatherings = ProfessionalGathering::paginate(15);
        // dd($professional_gatherings );
         return view('related-sites.professional_gatherings', compact('professional_gatherings'));
     }

    //  جمعيات علمية
     public function educational_sciences()
     {
        $educational_sciences = ScientificSociety::paginate(15);
        //    dd($educational_sciences );
         return view('related-sites.educational_sciences' ,compact('educational_sciences'));
     }

     //  نظم ومصادر التعلم
     public function under_construction()
     {
         return view('under_construction.under_construction');
     }

     //  عالمية
     public function events()
     {
        
        $events = Occasion::where('type' , 'option1')->paginate(15);
            dd($events );
         return view('events.events' , compact('events'));
     }


     //  وطنيه 2
     public function events2()
     {
        $events = Occasion::where('type' , 'option2')->paginate(15);
            // dd($events );
         return view('events.events2' ,  compact('events'));
     }

      //  انتاج الدروس
      public function create_courses()
      {
        
        $course = Course::paginate(15);
        //  dd($course );
          return view('professional_development.create_courses' , compact('course'));
      }
     
     
     
    
    

    

    
}
