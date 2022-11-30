<?php

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

Route::get('/register', function () {
    return view('register');
})-> name('register');

Route::get('/courses', function () {
    return view('courses');
})-> name('courses');
Route::get('/thanwy', function () {
    return view('thanwy');
})-> name('thanwy');

Route::get('home', function () {
    return view('home');
});

Route::get('/maths_1/{id}', function ($id) {
    return view('cources',[
        'page_name'=>'Maths',
        'id'=> $id
    ]);
}) -> name('maths_1');

Route::get('/prep-courses/{id}', function ($id) {
    return view('cources',[
        'id'=> $id,
        'page_name'=>'prep courses'
    ]);
}) -> name('prep-courses');