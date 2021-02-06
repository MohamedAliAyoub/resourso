<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');

//روابط ذات صلة
Route::get('/related-sites/educational_institutions', 'RelatedSitesController@educational_institutions')->name('educational_institutions');
Route::get('/related-sites/virtual_school', 'RelatedSitesController@virtual_school')->name('virtual_school');
Route::get('/related-sites/libraries', 'RelatedSitesController@libraries')->name('libraries');
Route::get('/related-sites/libraries2', 'RelatedSitesController@libraries2')->name('libraries2');
Route::get('/related-sites/search_engines', 'RelatedSitesController@search_engines')->name('search_engines');
Route::get('/related-sites/forums_and_forums', 'RelatedSitesController@forums_and_forums')->name('forums_and_forums');
Route::get('/related-sites/professional_gatherings', 'RelatedSitesController@professional_gatherings')->name('professional_gatherings');
Route::get('/related-sites/educational_sciences', 'RelatedSitesController@educational_sciences')->name('educational_sciences');

// نظم ومصادر التعلم
Route::get('/under_construction', 'RelatedSitesController@under_construction')->name('under_construction');
// نظم ومصادر التعلم نهاية 

// مناسبات
Route::get('/events', 'RelatedSitesController@events')->name('events');
Route::get('/events2', 'RelatedSitesController@events2')->name('events2');
//نهاية  مناسبات

//التطوير المهني
Route::get('professional_development/educational_lessons', 'ProfessionalDevelopmentController@educational_lessons')->name('educational_lessons');
Route::get('professional_development/practical_lessons', 'ProfessionalDevelopmentController@practical_lessons')->name('practical_lessons');
Route::get('professional_development/active_learning', 'ProfessionalDevelopmentController@active_learning')->name('active_learning');
        // انهاء الدروس

        //  التدريب
        //  مهارات البحث ومصادر المعلومات
Route::get('training/training1', 'ProfessionalDevelopmentController@training1')->name('training1');
Route::get('training/training2', 'ProfessionalDevelopmentController@training2')->name('training2');
Route::get('training/training3', 'ProfessionalDevelopmentController@training3')->name('training3');
Route::get('training/training4', 'ProfessionalDevelopmentController@training4')->name('training4');
Route::get('training/training5', 'ProfessionalDevelopmentController@training5')->name('training5');
Route::get('training/training6', 'ProfessionalDevelopmentController@training6')->name('training6');
Route::get('training/training7', 'ProfessionalDevelopmentController@training7')->name('training7');

// نهاية التطوير المهني
// درسات وبحوث 
Route::get('researches/researches1', 'ProfessionalDevelopmentController@researches1')->name('researches1');
Route::get('researches/researches2', 'ProfessionalDevelopmentController@researches2')->name('researches2');
Route::get('researches/researches3', 'ProfessionalDevelopmentController@researches3')->name('researches3');
// درسات وبحوث نهاية
// نماذج  
Route::get('models/model1', 'ProfessionalDevelopmentController@model1')->name('model1');
Route::get('models/model2', 'ProfessionalDevelopmentController@model2')->name('model2');
Route::get('models/model3', 'ProfessionalDevelopmentController@model3')->name('model3');
Route::get('models/model4', 'ProfessionalDevelopmentController@model4')->name('model4');
Route::get('models/model5', 'ProfessionalDevelopmentController@model5')->name('model5');
Route::get('models/model6', 'ProfessionalDevelopmentController@model6')->name('model6');
Route::get('models/model7', 'ProfessionalDevelopmentController@model7')->name('model7');
Route::get('models/model8', 'ProfessionalDevelopmentController@model8')->name('model8');
Route::get('models/model9', 'ProfessionalDevelopmentController@model9')->name('model9');
Route::get('models/model10', 'ProfessionalDevelopmentController@model10')->name('model10');
Route::get('models/model11', 'ProfessionalDevelopmentController@model11')->name('model11');
Route::get('models/model12', 'ProfessionalDevelopmentController@model12')->name('model12');

// نماذج نهاية  



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
