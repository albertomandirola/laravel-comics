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
    $socials = config('social');
    $footer_lists = config('footer');
    return view('home', compact( 'socials', 'footer_lists'));
})->name('home');



Route::get('/comics', function () {
    $socials = config('social');
    $footer_lists = config('footer');
    $comics = config('comics');
    return view('comics', compact('comics', 'socials', 'footer_lists'));
})->name('comics');

Route::get('/comics/comic_details/{param}', function ($param) {
    $socials = config('social');
    $footer_lists = config('footer');
    $comics = config('comics');

    $single_comic = NULL;

    foreach ($comics as $item) {
        if ($item['id'] == $param) {
            $single_comic = $item;
        };
    };

    return view('comic_detail', compact('socials', 'footer_lists',  'comics',  'single_comic'));
})->name('comic_details');
