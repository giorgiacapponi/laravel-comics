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
    $nav_links=[
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ];
    $db= config('new-comics');
    $items = $db['comics'];
    $links_main=$db['links_main'];
    $links_footer=$db['navFooter'];
    return view('home',compact('nav_links','items','links_main','links_footer'));
   

});
Route::get('/characters', function () {
    $nav_links=[
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ];
    $db= config('new-comics');
    $links_footer=$db['navFooter'];
    return view('characters',compact('nav_links','links_footer'));
});
