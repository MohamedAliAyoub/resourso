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

// مناسبات
Route::get('/events', 'RelatedSitesController@events')->name('events');
Route::get('/events2', 'RelatedSitesController@events2')->name('events2');

//التطوير المهني
Route::get('professional_development/create_courses', 'RelatedSitesController@create_courses')->name('create_courses');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
