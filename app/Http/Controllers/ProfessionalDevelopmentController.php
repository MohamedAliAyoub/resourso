<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course ; 
use App\Exercise ; 
use App\Research ; 
use App\Modelle ; 




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
            //   dd($items);
            return view ('training.training1' ,  compact('items'));
        }

        // التعليم الالكترونى وتقنيات التعلم  
        public function training2(){
            $items = Exercise::where('type' , 2)->paginate(15);
            //   dd($items);
            return view ('training.training2' ,  compact('items'));
        }

        // القياده والاداره
        public function training6(){
            $items = Exercise::where('type' , 6)->paginate(15);
            //   dd($items);
            return view ('training.training6' ,  compact('items'));
        }

        // تطوير الذات 
        public function training7(){
            $items = Exercise::where('type' , 7)->paginate(15);
            //   dd($items);
            return view ('training.training7' ,  compact('items'));
        }

        // نشرات تربوية
        public function training4(){
            $items = Exercise::where('type' , 4)->paginate(15);
            //   dd($items);
            return view ('training.training4' ,  compact('items'));
        }

        // قاعات تدريبية
        public function training5(){
            $items = Exercise::where('type' , 5)->paginate(15);
            //   dd($items);
            return view ('training.training5' ,  compact('items'));
        }
        // نهاية التدريبات 
        // درسات وبحوث



        //  أوراق عمل
        public function researches1(){
            $items = Research::where('type' , 1)->paginate(15);
            //    dd($items);
            return view ('researches.search1' ,  compact('items'));
        }

        // رسائل علمية

        public function researches2(){
            $items = Research::where('type' , 2)->paginate(15);
            //   dd($items);
            return view ('researches.search2' ,  compact('items'));
        }

        // بحوث إجرائية 

        public function researches3(){
            $items = Research::where('type' , 3)->paginate(15);
            //   dd($items);
            return view ('researches.search3' ,  compact('items'));
        } // درسات وبحوث نهاية
        

        // نماذج

        
        // خطة تفصيلية
        public function model1(){
            $items = Modelle::where('type' , 1)->paginate(15);
            //    dd($items);
            return view ('modells.model1' ,  compact('items'));
        }                
   
        //خطة تشغيلية
        public function model2(){
            $items = Modelle::where('type' , 2)->paginate(15);
            //    dd($items);
            return view ('modells.model2' ,  compact('items'));
        }
        //  تقارير دورية
        public function model3(){
            $items = Modelle::where('type' , 3)->paginate(15);
            //    dd($items);
            return view ('modells.model3' ,  compact('items'));
        }
        // تقارير ختامية
        public function model4(){
            $items = Modelle::where('type' , 4)->paginate(15);
            //    dd($items);
            return view ('modells.model4' ,  compact('items'));
        }        
        // (نماذج التقارير)  تقارير أخرى   
        public function model5(){
            $items = Modelle::where('type' , 5)->paginate(15);
            //    dd($items);
            return view ('modells.model5' ,  compact('items'));
        }
        //  نماذج من اختباراات المرشحين
        public function model6(){
            $items = Modelle::where('type' , 6)->paginate(15);
            //    dd($items);
            return view ('modells.model5' ,  compact('items'));
        }
        //  نماذج من اختباراات المرشحين
        public function model7(){
            $items = Modelle::where('type' , 7)->paginate(15);
            //    dd($items);
            return view ('modells.model7' ,  compact('items'));
        }
        //   محضر فقد واتالف  
        public function model8(){
            $items = Modelle::where('type' , 8)->paginate(15);
            //    dd($items);
            return view ('modells.model8' ,  compact('items'));
        }
        //  محضر سحب رجيع  
        public function model9(){
            $items = Modelle::where('type' , 9)->paginate(15);
            //    dd($items);
            return view ('modells.model9' ,  compact('items'));
        }
        // نموذج الأثاث الزائد
        public function model10(){
            $items = Modelle::where('type' , 10)->paginate(15);
            //    dd($items);
            return view ('modells.model10' ,  compact('items'));
        }
        // نموذج نقل المركز 
        public function model11(){
            $items = Modelle::where('type' , 11)->paginate(15);
            //    dd($items);
            return view ('modells.model11' ,  compact('items'));
        }
        // نماذج أخرى 
        public function model12(){
            $items = Modelle::where('type' , 12)->paginate(15);
            //    dd($items);
            return view ('modells.model12' ,  compact('items'));
        } 
        // نهاية النماذج                               
}
