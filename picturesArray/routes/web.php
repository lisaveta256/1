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


/*
Route::get('/', function () {
    $urls = DB::select('select*from pic.url_table');
    $bank = DB::select('select*from pic.url_table where bank="true"');
    return view('pictures.index',compact('urls'),compact('bank'));
});

Route::get('/bank', function () {
    $bank = DB::select('select*from pic.url_table where bank="true"');
    return view('pictures.show',compact('bank'));
});*/
Route::get('/', 'PicturesController@index');
Route::get('/bank', 'PicturesController@bank');

