<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get("/",function(){
    return view("home.index.index");
});

//后台
Route::get("/admin", "Admin\IndexController@index");
Route::get("/login", "Admin\IndexController@login");
Route:get("/com","Admin\CommonController@index");
//Route::get("/aa",function(){
//    return view("admin.common.left");
//});

//Route::get("/admin/{mod_id}","Admin\IndexController@mod_id");//后台左列模块遍历


//前台
Route::get("/home","home\IndexController@index");
