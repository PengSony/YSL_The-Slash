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

Route::get('/Home', function () {
    return view('Home');
});
Route::get('News',function(){
    return View ('News');
});
Route::get('QuoteRequest',function(){
    return View ('QuoteRequest');
});
Route::get('ContactUs',function(){
    return View ('ContactUs');
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



