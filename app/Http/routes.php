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
Route::any("/errors/cominfo",function(){
    return view("errors.cominfo");
});




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
Route::get("/Admin/auth/adminSelf","Admin\AdminController@adminSelf");//个人中心
Route::get("/Admin/aSelf","Admin\AdminController@aSelf");
Route::post("/Admin/auth/adminAvartar","Admin\Controller@adminAvartar");

//用户模块
Route::get("/Admin/user/userList","Admin\UserController@userList");//用户列表
Route::get("/Admin/user/userAdd","Admin\UserController@userAdd");//用户添加
Route::get("/Admin/user/uEdit/{id}","Admin\UserController@uEdit");
Route::post("/Admin/user/userEdit/","Admin\UserController@userEdit");


//----------------权限管理----------（管理员）
//规则小模块
Route::get("/Admin/auth/ruleList","Admin\AdminController@ruleList");//规则列表
Route::post("/Admin/auth/ruleAdd","Admin\AdminController@ruleAdd");//添加规则
Route::get("/Admin/auth/rAdd",function(){
    return view("admin.auth.ruleAdd");
});
Route::get("/Admin/auth/ruleDel/{id}","Admin\AdminController@ruleDel");
Route::post("/Admin/auth/ruleEdit/{id}","Admin\AdminController@ruleEdit");//编辑规则
Route::get("/Admin/auth/rEdit/{id}","Admin\AdminController@rEdit");
Route::post("/Admin/auth/ruleLock/","Admin\AdminController@ruleLock");//规则启用禁用



//分组小模块
Route::get("/Admin/auth/groupList","Admin\AdminController@groupList");//组列表
Route::post("/Admin/auth/groupEdit/{gid}","Admin\AdminController@groupEdit");//组编辑
Route::get("/Admin/auth/gEdit/{gid}","Admin\AdminController@gEdit");//
Route::post("/Admin/auth/groupAdd","Admin\AdminController@groupAdd");//添加组
Route::get("/Admin/auth/gAdd/","Admin\AdminController@gAdd");
Route::get("/Admin/auth/groupDel/{id}","Admin\AdminController@groupDel");
Route::post("/Admin/auth/setAuth","Admin\AdminController@setAuth");//组权限更改


//管理员小模块
Route::get("/Admin/auth/adminList","Admin\AdminController@adminList");//管理员列表

Route::post("/Admin/auth/adminAdd","Admin\AdminController@adminAdd");//管理员添加
Route::get("/Admin/auth/aAdd","Admin\AdminController@aAdd");
Route::post("/Admin/auth/adminEdit","Admin\AdminController@adminEdit");//管理员编辑
Route::get("/Admin/auth/aEdit/{id}","Admin\AdminController@aEdit");
Route::get("/Admin/auth/adminShow/{id}","Admin\AdminController@adminShow");
Route::post("/Admin/auth/setAdminGroup","Admin\AdminController@setAdminGroup");//修改管理员分组

Route::post("/Admin/auth/adminDel","Admin\AdminController@adminDel");//管理员删除
Route::post("/Admin/auth/adminLock","Admin\AdminController@adminLock");//管理员锁定


//----------------商品管理----------------

Route::controller("/Admin/category","Admin\CategoryController");//商品分类模块

Route::controller("/Admin/goods","Admin\GoodsController");//商品模块


//--------------订单管理---------------
Route::controller("/Admin/order","Admin\OrderController");


/*---------------------------------------------------*
 *   前台                                            *
 *---------------------------------------------------*/
Route::get("/","Home\IndexController@index");   //前台首页

Route::get("/Home/login/captcha/{tmp}", "Home\LoginController@captcha");    //验证码引入

Route::get("/Home/login", "Home\LoginController@index");    // 前台登陆

Route::POST("/Home/logTodo", "Home\LoginController@logTodo");//前台登陆验证

Route::get("/Home/create", "Home\LoginController@create");  // 前台注册页

Route::post("/Home/register", "Home\LoginController@store");  // 前台注册用户数据入库

Route::get("/Home/details/{tmp}", "Home\OrderController@details"); // 宝贝详情

Route::get("/Home/living", "Home\OrderController@living");  // 商品列表

Route::get("/Home/shopbag", "Home\UserController@shopbag");    // 购物车

Route::get("/Home/favorites", "Home\UserController@favorites");    // 收藏夹

Route::get ("/Home/member", "Home\UserController@index");    // 个人中心

Route::get("/Home/memedit", "Home\UserController@redact");   // 编辑个人中心

Route::post("/Home/mesave", "Home\UserController@save");    // 修改个人信息

Route::get("/Home/indent", "Home\UserController@indent");  // 订单

Route::get("/Home/out", "Home\LoginController@logout");  // 退出登录

Route::get("/Home/dress", "Home\OrderController@ladyDress");    // 女装类

Route::get("/Home/sublink/{tmp}", "Home\OrderController@sublink");  // 子分类通用模板

Route::get("/Home/shows/{tmp}", "Home\OrderController@shows");	// 显示子类下的所有商品

Route::get("Home/particulars", "Home\OrderController@particulars"); // 女装详情