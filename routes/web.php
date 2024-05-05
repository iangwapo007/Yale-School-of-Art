<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/apply', function () {
    return view('apply');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/public-events', function () {
    return view('public-events');
});

Route::get('/publications', function () {
    $publications = DB::table('publications')->get();
    return view('publications',[
        'publications' => $publications
    ]);
});

Route::get('/news', function () {
    $news = DB::table('news')->get();
    return view('news',[
        'news' => $news
    ]);
});
