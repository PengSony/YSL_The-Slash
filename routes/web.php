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

Route::get('/home', function (){
    return view('home');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/request', function () {
    return view('request');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Html::macro('clever_link',function($route){
    $path=Request::path();// recieve path from server
    $active="";

    //return $route. ' === '. $path; // this for print for sure what our path and route it's equal or not


    if($route == $path){
        $active="active";// can be active ,focus or anything in style css
    }
    else{
        $active="";
    }
    return $active;
});