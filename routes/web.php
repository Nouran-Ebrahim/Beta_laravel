<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Show;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Thanawy;
// use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// })-> name('index');

Route::get('/',[DataController::class,'hello' ])->name('index') ;    // show student name in home page

Route::get('/courses', function () {
    return view('courses');
})-> name('courses');

// Route::get('/thanwy', function () {
//     return view('thanwy');
// })-> name('thanwy');



//  *********************** routes of preparatory levels ************************
Route::get('/prep-courses',[Show::class,'prep'])->name('prep-courses');
//  show the page of courses for praporatory levels
Route::get('/pcoursedetails',[Show::class,'details'])->name('details');
Route::get('/preparatorycourses/course details',[DataController::class,'pcoursedetails'])->name('showdetails');
Route::get('/prep-courses/subscribe',[DataController::class,'subscribe_course'])->name('subscribe');  //  زر اشترك الان فى المرحلة الاعدادية 



//  *********************** routes of thanwy levels ************************

Route::get('/thanwy-courses',[Show::class,'therd'] )->name('start');
// view button in home page for thanawy levels
Route::get('/thanwy12-courses', [Show::class,'first'])->name('thanwy12-courses');
Route::get('/thanwy12-courses/subscribe',[Thanawy::class,'subscribe_firstcourse'])->name('firstsubscribe');
Route::get('thanwy',[Show::class,'show'])->name('thanwy');
Route::get('/thanwy/subscribe',[Thanawy::class,'subscribe_thanwy'])->name('secoundtherdsubscribe');
//  show the page of courses for praporatory levels
Route::get('/thcoursedetails',[Show::class,'details_th'])->name('details_th');
Route::get('/details_th',[Thanawy::class,'thcoursedetails'])->name('showdetails_th');
// *****************************************************



Route::prefix('register')->group(function () {

    Route::get('/create',[DataController::class,'create' ])->name('register') ;
    Route::post('/joinus',[DataController::class,'store' ])->name('login') ;

});
Route::get('/joinus', function () {
    return view('joinus');
})-> name('joinus');

Route::post('login',[DataController::class,'loginstu' ])->name('login-stu') ;

Route::get('/about', function () {
    return view('about');
})-> name('about');


// ********************************  Admin routes *************************************** 
Route::get('/admin',[Admin::class,'admin' ])->name('admin') ;

Route::post('admin',[Admin::class,'adminstore' ])->name('adminstore') ;

Route::post('admin_change',[Admin::class,'change_status' ])->name('change_status') ;


//  route to update subject's links
Route::get('/links',[Admin::class,'sub_links' ])->name('links') ;
Route::get('/edit_link',[Admin::class,'edit_link' ])->name('edit_link') ;
// Route::get('/add_lesson',[Admin::class,'addLesson' ])->name('addLesson') ;
// Route::get('/add_unit',[Admin::class,'addUnit' ])->name('addUnit') ;
