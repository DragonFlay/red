<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    public function index()
    {
        $categories = DB::table("category")->where("isNav", "Y")->get();
        // 显示前台主页
        return view("home.index", compact("categories"));
    }
    
}
