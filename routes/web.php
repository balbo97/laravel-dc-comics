<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------\
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');
    return view('home_page', compact('comics'));
})->name('home_page');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/comics/{param}', function ($id) {
    $comics = config('comics');

    $comic = null;
    foreach($comics as $item){
        if($comic['id'] == $id){
            $comic = $item;
        }
    }

    return view('detail_comic', compact('comic'));
})->name('detail_comic');
