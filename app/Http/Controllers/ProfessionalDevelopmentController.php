<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course ; 
use App\Exercise ; 

class ProfessionalDevelopmentController extends Controller
{

    // دروس تعليمية
    public function educational_lessons(){
        $items = Course::where('type' , 1)->paginate(15);
        return view ('professional_development.create_courses' ,  compact('items'));
    }

        //الدروس
        // دروس تطبيية
        public function practical_lessons(){
            $items = Course::where('type' , 2)->paginate(15);
            
            return view ('professional_development.practical_lessons' ,  compact('items'));
        }

        //  التعليم النشط
        public function active_learning(){
            $items = Course::where('type' , 3)->paginate(15);
            
            return view ('professional_development.active_learning' ,  compact('items'));
        }

        // انهاء الدروس

        //  التدريب
        //  مهارات البحث ومصادر المعلومات
        public function training1(){
            $items = Exercise::where('type' , 1)->paginate(15);
            //  dd($items);
            return view ('training.training1' ,  compact('items'));
        }

        

    

}
