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

//Route::get('/', function () {
//    return view('welcome');
//
//});
//
//Route::get('/contact', function(){
//    return "hi there its jasbin";
//});
//
////passing parameter from urls
//Route::get('/post/{id}/{name}', function ($id,$name){
//
//    return 'this is the post: '.$id.' '.$name;
//});
//
////custom routes name
//Route::get('/admin/home', array('as'=>'admin.home', function (){
//    $url = route('admin.home');
//    return $url;
//}));

Route::get('/home', 'HomeController@index');

//Route::get('/form', 'HomeController@form');
Route::get('/getname/{name}',function ($name){
    return "the user is: ".$name;
});

Route::post('/form', 'HomeController@form');

Route::get('/test',function (){
    return "form working";
});