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
    return view("home.index");
});

Route::get("/index",function(){
    return view("admin.index");
});


//后台
Route::get("/Admin", "Admin\IndexController@index");
Route::get("/Admin/login","Admin\LoginController@index");
Route::get("/Admin/captcha/{tmp}", "Admin\LoginController@captcha");//验证码请求路由规则
Route::post("/Admin/logTodo", "Admin\LoginController@logTodo");//登陆验证
Route::get("/Admin/logout", "Admin\LoginController@logout");//退出登陆

Route::get("/Admin/top",function(){//后台顶部
    return view("admin.common.top");
});
Route::get("/Admin/left",function(){//后台左边列表
    return view("admin.common.left");
});
Route::get("/Admin/main",function(){//后台右(内容)列表
    return view("admin.common.main");
});
Route::get("/Admin/switch",function(){//
    return view("admin.common.switch");
});
Route::get("/Admin/bottom",function(){//后台底部
    return view("admin.common.bottom");
});
Route::get("/Admin/welcome",function(){
    return view("admin.welcome");
});

//用户模块
Route::get("/Admin/user/list","Admin\UserController@userList");//用户列表
Route::get("/Admin/useradd","Admin\UserController@userAdd");//用户添加
//权限模块（管理员）
Route::get("/Admin/auth/list","Admin\AdminController@adminList");//管理员列表
Route::get("/Admin/auth/adminDdd","Admin\AdminController@adminAdd");//管理员添加
Route::post("/Admin/auth/adminDel","Admin\AdminController@adminDel");//管理员删除
Route::post("/Admin/auth/setGroup","Admin\AdminController@setGroup");//管理员分组
Route::post("/Admin/auth/adminLock","Admin\AdminController@adminLock");//管理员锁定



//前台
Route::get("/Home","home\IndexController@index");
// 前台注册
Route::get("/homeregister", function () {
    return view("home.register");
});
// 前台登陆
Route::get("/homelogin", function () {
    return view("home.login");
});
// 商品列表
Route::get("/homeliving", function () {
    return view("home.living");
});
// 购物袋
Route::get("/homeshopbag", function () {
    return view("home.shopbag");
});
// 个人中心
Route::post("/homeuser", function () {
    return view("home.user");
});
// 订单
Route::get("/homeindent", function () {
    return view("home.indent");
});
// 宝贝详情
Route::get("/homedetails", function () {
    return view("home.details");
});