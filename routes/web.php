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

Route::get('/', function () {
    return view('index');
})-> name('index');

Route::get('/about', function () {
    return view('about');
})-> name('about');

Route::get('/joinus', function () {
    return view('joinus');
})-> name('joinus');


Route::get('/courses', function () {
    return view('courses');
})-> name('courses');
// Route::get('/thanwy', function () {
//     return view('thanwy');
// })-> name('thanwy');


Route::get('/prep-courses',[Show::class,'prep'])->name('prep-courses');

Route::get('/thanwy-courses',[Show::class,'therd'] )->name('start');

Route::get('/thanwy12-courses', [Show::class,'firstsecond'])->name('thanwy12-courses');

Route::get('thanwy',[Show::class,'show'])->name('thanwy');
//Route::get('about',[DataController::class,'getAllUser'])->name('about');

Route::prefix('register')->group(function () {

    Route::get('/create',[DataController::class,'create' ])->name('register') ;
    Route::post('/joinus',[DataController::class,'store' ])->name('login') ;


});

Route::get('/joinus',[DataController::class,'check' ])->name('joinus') ;
  
