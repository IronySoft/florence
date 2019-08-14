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

Route::resource('view', 'ViewController');


Route::get('/', 'ViewController@index')->name('/');
Route::get('/index2', 'ViewController@index2')->name('index.type2');
Route::get('view-blog', 'ViewController@blogIndex')->name('view.blog.index');
//Route::get('contact', 'ViewController@contactIndex')->name('contact.index');
Route::get('view-about', 'ViewController@aboutIndex')->name('view.about.index');
Route::get('view-course', 'ViewController@courseIndex')->name('view.course.index');
Route::get('view-testimonial', 'ViewController@testimonialIndex')->name('view.testimonial.index');
Route::get('gallery', 'ViewController@galleryIndex')->name('gallery.index');

//Route::get('view-admission', 'ViewController@admissionIndex')->name('view.admission.index');

Route::resource('admission', 'AdmissionController');

Route::resource('contact', 'ContactController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    Route::resource('main', 'AdminController');

    Route::resource('project', 'ProjectController');

    Route::resource('slider', 'SliderController');

    Route::resource('testimonial', 'TestimonialController');

    Route::resource('about', 'AboutUsController');

    Route::resource('goal', 'MissionVisionController');

    Route::resource('content', 'ContentController');

    Route::resource('course', 'CourseController');

    Route::resource('address', 'AddressController');

    Route::resource('blog', 'BlogController');

    Route::resource('text', 'TextController');

    Route::resource('florence', 'FlorenceTeamController');

    Route::resource('student', 'StudentController');

//
//    Route::get('florence-index', 'AboutUsController@florenceIndex')->name('florence.index');
//    Route::get('florence-create', 'AboutUsController@florenceCreate')->name('florence.create');
//    Route::post('florence-store', 'AboutUsController@florenceStore')->name('florence.store');


});
Route::get("/{anypath}", "ViewController@index")->where('path', '.*');
