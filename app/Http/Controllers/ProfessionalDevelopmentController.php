<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course ; 
use App\Exercise ; 
use App\Research ; 
use App\Modelle ; 
use App\Form ; 
use App\Regulation ; 
use App\Circular ;
use App\Clue ;
use App\Document ;


 







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
        // استمارات


        // استمارة تبادل زيارة
        public function form1(){
            $items = Form::where('type' , 1)->paginate(15);
            //    dd($items);
            return view ('forms.form1' ,  compact('items'));
        }

        //   استمارة زيارة مركز 
        public function form2(){
            $items = Form::where('type' , 2)->paginate(15);
            //    dd($items);
            return view ('forms.form2' ,  compact('items'));
        }
        // استمارة تقويم األداءالوظيفي
        public function form3(){
            $items = Form::where('type' , 3)->paginate(15);
            //    dd($items);
            return view ('forms.form3' ,  compact('items'));
        }
        // استمارة تقييم برنامج تدريبي 
        public function form4(){
            $items = Form::where('type' , 4)->paginate(15);
            //    dd($items);
            return view ('forms.form4' ,  compact('items'));
        }
        // استمارة توثيق برنامج تدريبي
        public function form5(){
            $items = Form::where('type' , 5)->paginate(15);
            //    dd($items);
            return view ('forms.form5' ,  compact('items'));
        }
        // استمارة طلب إنهاء تكليف
       
        public function form6(){
            $items = Form::where('type' , 6)->paginate(15);
            //    dd($items);
            return view ('forms.form6' ,  compact('items'));
        }
        //نهاية استمارات
        // لوائح
        // لائحة شاغلي الوظائف التعليمية
        public function regulations1(){
            $items = Regulation::where('type' , 1)->paginate(15);
            //    dd($items);
            return view ('regulations.regulations1' ,  compact('items'));
        }

        // لائحة التشكيلات المدرسية 
        public function regulations2(){
            $items = Regulation::where('type' , 2)->paginate(15);
            //    dd($items);
            return view ('regulations.regulations2' ,  compact('items'));
        }
        // مدونة قواعد السلوك الوظيفي وأخلاقيات الوظيفة العامة 
        public function regulations3(){
            $items = Regulation::where('type' , 3)->paginate(15);
            //    dd($items);
            return view ('regulations.regulations3' ,  compact('items'));
        }
        //نهاية لوائح
        // التعاميم
        // الترشيح لعمل أمين مصادر  
        public function circulars1(){
            $items = Circular::where('type' , 1)->paginate(15);
            //    dd($items);
            return view ('circulars.circulars1' ,  compact('items'));
        }
        // منع استخدام المصادر كقاعة دراسية
        public function circulars2(){
            $items = Circular::where('type' , 2)->paginate(15);
            //    dd($items);
            return view ('circulars.circulars2' ,  compact('items'));
        }

        // تفعيل مراكز مصادر التعلم  
        public function circulars3(){
            $items = Circular::where('type' , 3)->paginate(15);
            //    dd($items);
            return view ('circulars.circulars3' ,  compact('items'));
        }
        // استخدام أجهزة مراكز مصادر التعلم 
        public function circulars4(){
            $items = Circular::where('type' , 4)->paginate(15);
            //    dd($items);
            return view ('circulars.circulars4' ,  compact('items'));
        }
        // مدونة قواعد السلوك الوظيفي وأخالقيات الوظيفة العامة 
        public function circulars5(){
            $items = Circular::where('type' , 5)->paginate(15);
            //    dd($items);
            return view ('circulars.circulars5' ,  compact('items'));
        }
        //نهاية التعاميم
        // الادلة
        // دليل مصادر التعلم 
        public function clues1(){
            $items = Clue::where('type' , 1)->paginate(15);
            //    dd($items);
            return view ('clues.clues1' ,  compact('items'));
        }

        // الدليل اإلجرائي  
        public function clues2(){
            $items = Clue::where('type' , 2)->paginate(15);
            //    dd($items);
            return view ('clues.clues2' ,  compact('items'));
        }
        // الدليل التنظيمي 
        public function clues3(){
            $items = Clue::where('type' , 3)->paginate(15);
            //    dd($items);
            return view ('clues.clues3' ,  compact('items'));
        }

        // الدليل اإلرشادي للمكتبة المدرسية
        public function clues4(){
            $items = Clue::where('type' , 4)->paginate(15);
            //    dd($items);
            return view ('clues.clues4' ,  compact('items'));
        }
        
        //نهاية الادلة
        // وثائق
        // وثيقة سياسة التعليم 
        public function documents1(){
            $items = Document::where('type' , 1)->paginate(15);
            //    dd($items);
            return view ('documents.documents1' ,  compact('items'));
        }
        // وثيقة المعايير المهنية للمعلمين 
        public function documents2(){
            $items = Document::where('type' , 2)->paginate(15);
            //    dd($items);
            return view ('documents.documents2' ,  compact('items'));
        }

        //نهاية وثائق
        




}
