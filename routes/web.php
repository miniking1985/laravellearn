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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/go', function(){
    echo "haha";
});

Route::get('/test','Test@index');

##视图测试1
Route::get('/test1',function(){
   return view('test1'); 
});
##视图测试2
Route::get('/test2',function(){
    return view('test2');
    
});
