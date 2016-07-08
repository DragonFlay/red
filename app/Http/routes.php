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
//基本设置
Route::get("/Admin/auth/adminSelf","Admin\Controller@adminSelf");//个人中心
Route::get("/Admin/aSelf",function(){
    return view("admin.auth.adminSelf");
});
Route::post("/Admin/auth/adminAvartar","Admin\Controller@adminAvartar");

//用户模块
Route::get("/Admin/user/list","Admin\UserController@userList");//用户列表
Route::get("/Admin/useradd","Admin\UserController@userAdd");//用户添加
//权限模块（管理员）

Route::get("/Admin/auth/ruleList","Admin\AdminController@ruleList");//规则列表
Route::post("/Admin/auth/ruleAdd","Admin\AdminController@ruleAdd");//添加规则
Route::get("/Admin/auth/rAdd",function(){
    return view("admin.auth.ruleAdd");
});
Route::get("/Admin/auth/ruleDel/{id}","Admin\AdminController@ruleDel");
Route::post("/Admin/auth/ruleEdit/{id}","Admin\AdminController@ruleEdit");//编辑规则
Route::get("/Admin/auth/rEdit/{id}","Admin\AdminController@rEdit");





Route::get("/Admin/auth/groupList","Admin\AdminController@groupList");//组列表
Route::post("/Admin/auth/groupEdit/{gid}","Admin\AdminController@groupEdit");//组编辑
Route::get("/Admin/auth/gEdit/{gid}","Admin\AdminController@gEdit");//
Route::post("/Admin/auth/groupAdd","Admin\AdminController@groupAdd");//添加组
Route::get("/Admin/auth/gAdd/","Admin\AdminController@gAdd");
Route::post("/Admin/auth/setAuth","Admin\AdminController@setAuth");//组权限更改



Route::get("/Admin/auth/adminList","Admin\AdminController@adminList");//管理员列表

Route::post("/Admin/auth/adminAdd","Admin\AdminController@adminAdd");//管理员添加
Route::get("/Admin/auth/aAdd","Admin\AdminController@aAdd");
Route::post("/Admin/auth/adminEdit","Admin\AdminController@adminEdit");//管理员编辑
Route::get("/Admin/auth/aEdit/{id}","Admin\AdminController@aEdit");
Route::any("/Admin/auth/setAdminGroup","Admin\AdminController@setAdminGroup");//修改管理员分组

Route::post("/Admin/auth/adminDel","Admin\AdminController@adminDel");//管理员删除
//管理员分组
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