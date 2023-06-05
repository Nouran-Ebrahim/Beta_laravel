<?php

use App\Http\Controllers\Show;
use App\Http\Controllers\DataController;
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


Route::get('/prep-courses',[Show::class,'prep'])->name('prep-courses');


//  show the page of courses for praporatory levels
Route::get('/pcoursedetails',[Show::class,'details'])->name('details');

Route::get('/preparatorycourses/course details',[DataController::class,'pcoursedetails'])->name('showdetails');
// ***********************************************************

Route::get('/prep-courses/subscribe',[DataController::class,'subscribe_course'])->name('subscribe');  //  زر اشترك الان فى المرحلة الاعدادية 


Route::get('/thanwy-courses',[Show::class,'therd'] )->name('start');

// view button in home page for thanawy levels
Route::get('/thanwy12-courses', [Show::class,'first'])->name('thanwy12-courses');
Route::get('/thanwy12-courses/subscribe',[DataController::class,'subscribe_firstcourse'])->name('firstsubscribe');


Route::get('thanwy',[Show::class,'show'])->name('thanwy');
Route::get('/thanwy/subscribe',[DataController::class,'subscribe_thanwy'])->name('secoundtherdsubscribe');


//  show the page of courses for praporatory levels
Route::get('/thcoursedetails',[Show::class,'details'])->name('details');

// Route::get('/preparatorycourses/course details',[DataController::class,'thcoursedetails'])->name('showdetails');
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

Route::get('/admin',[DataController::class,'admin' ])->name('admin') ;

Route::post('admin',[DataController::class,'adminstore' ])->name('adminstore') ;

Route::post('admin_change',[DataController::class,'change_status' ])->name('change_status') ;

