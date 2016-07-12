<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Validator;
use Hash;
class LoginController extends Controller
{
    // 显示前台登陆页面的方法
    public function index (Request $request)
    {
        $data=$request->old;
        return view("home.login",compact("data"));
    }
    
    public function create()
    {
        //显示注册表单
        return view("home.register");
    }
    
    //生成验证码的方法
    public function captcha($tmp)
    {
        $builder = new CaptchaBuilder(); //生成验证码图片的Builder对象
        $builder->build($width = 90, $height=24);//可以设置图片宽高及字体
       
        $phrase = $builder->getPhrase();//获取验证码的内容
         Session::flash('code',$phrase); //把内容存入session
         header("Cache-Control:no-cache,must-revalidate");
         header('Content-Type:image/jpeg');
         $builder->output();
    }
    
    //前台用户注册提交
    public function store(UserRequest $request)
    {
        //验证码是否正确
        if(Session("code")!=$request->get("code"))
        {
            $request->flash();
            return back()->with(["info" => "验证码错误"]);
        }
       
       $data = $request->except("_token", "repassword","code");
       $data["password"] = Hash::make($data["password"]);
       // 数据入库
       if (false != $id = DB::table("users")->insertGetId($data))
       {
           return redirect("/Home/login");
       } else 
       {
           return back()->with(["info" => "注册失败"]);
       }
    } 
    
    // 登陆验证
    public function logTodo(Request $request)
    {   //验证码是否正确
        if(Session("code")!=$request->get("code"))
        {
            $request->flash();
            return back()->with(["info"=>"验证码错误"]);
        }
        //有效性验证
        $data = $request->only("username","password","code");
        $result = Validator::make($data,[
            "username"=>"required",
            "password"=>"required|between:6,15"
        ]);
        //如果验证失败 则回跳 并输出错误信息
        if($result->fails())
        {
            return back()->with(["info"=>$result->errors()]);
        }        
        //账号是否存在 密码是否正确
        $userModel = new \App\User();
        $userRec = $userModel->where("username",$data["username"])->get()->first();
        if(empty($userRec))
        {
            $request->flash();
            return back()->with(["info"=>"账号不存在"]);
        }else if(!Hash::check($data["password"], $userRec->password))
        {
            $request->flash();
            return back()->with(["info"=>"密码不正确"]);
        }else{
            session(["uData"=>$userRec]);
            return redirect("/Home/shopbag");
        }
    }
    
    // 退出登录
    public function logout()
    {
        Session::forget("uData");
        return redirect("/");
    }
}
