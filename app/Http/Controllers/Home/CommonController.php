<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class CommonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //初始化控制器的执行动作
    public function __construct()
    {
        //登陆验证
        if (!Session::has("uData"))
        {
            header("Location:/Home/login");
            exit;
        }
    }
}
