<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use DB;
class CommonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//     
         $rules = DB::table("admin_rule")->where("status", "1")->get();
        //非登录模块的路由 都需要【登陆验证】
        if (!Session::has("userData") && !preg_match('/^\/Admin\/[log|captcha]/',$_SERVER['REQUEST_URI'])) {
            //如果用户没有登录 则跳转到登录页
            return redirect("/Admin/login");
        //权限验证
        } else if(!empty($rules))
        {
            $auth_list = array();
            foreach ($rules as $rule)
            {
                $auth_list[$rule->name] = $rule->title;
            }
//            dd($auth_list);
            $subject = preg_replace("/\?.+/", "", $_SERVER['REQUEST_URI']);
            $subject = preg_replace("/\/\d$/", "", $subject);
//            dd($subject);
            if (array_key_exists($subject, $auth_list))
            {
                //验证用户是否具备操作权限
                $gid = (DB::table("admin")
                        ->leftJoin("admin_group", "admin_id", "=", "admin_group.uid")
                        ->where("admin_id", Session::get("userData")->admin_id)
                        ->pluck("gid"));
                $rules = DB::table("admin_auth")->where("gid", $gid)->pluck("rules");//1,2,3,4,5,6
                $ruleid = DB::table("admin_rule")->where("name", $subject)->pluck("id");
                if (!in_array($ruleid, explode(",", $rules)))
                {
//                    if(in_array($subject, ["/Admin/group/setRule", "/Admin/user/setGroup"]))  return response(["status" => 0, "info" => "对不起，你无权操作！"]);
                    return abort("cominfo")->with(["info" => "Access Deny", "url" => $_SERVER['HTTP_REFERER']]);
                }
            }
        }
        return $next($request);
    }
}
