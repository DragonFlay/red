<?php
namespace App\Http\Controllers\Home;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB, Hash;
use App\User;
use Validator;
use Session;

class UserController extends CommonController
{
    public function index()
    {
        // 显示个人中心
        return view("home.user");
    }
    public function indent()
    {
        //显示订单页面
        return view("home.indent");
    }

    public function shopbag()
    {
        //显示购物车
        return view("home.shopbag");
    }
    
    public function favorites()
    {
        // 显示收藏夹
        return view("home.favorites");
    }

    public function redact()
    {
        //编辑个人信息
        return view("home.memedit");
    }

    public function save(Request $request)
    {
        //保存个人信息
        $data = $request->except("_token","member");
        // dd($data);
        $id = Session("uData")->user_id;
        $affected_rows = DB::table("users")->where("user_id",$id)->update($data);
        if ($affected_rows > 0)
        {
            return redirect("/Home/member");
        } else 
        {
            return back()->with(["info" => "修改失败！"]);
        }
    }
   
}
