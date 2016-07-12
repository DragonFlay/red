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
//        $match = substr($_SERVER['REQUEST_URI'],0,strrpos($_SERVER['REQUEST_URI'],"/"));
         $rules = DB::table("admin_rule")
                 ->where("name",$_SERVER['REQUEST_URI'])
                 ->first();
       
//     dd(substr($_SERVER['REQUEST_URI'],0,strrpos($_SERVER['REQUEST_URI'],"/")));
        //非登录模块的路由 都需要【登陆验证】
        if (!Session::has("userData") && !preg_match('/^\/Admin\/[log|captcha]/',$_SERVER['REQUEST_URI'])) {
            //如果用户没有登录 则跳转到登录页
             header("Location:/Admin/login");
            exit;
        //权限验证
        } else if(!empty($rules) && $rules->status ==1)
        {
            
//            dd($_SERVER['REQUEST_URI']);
//            $auth_list = array();
//            foreach ($rules as $rule)
//            {
//                $auth_list[$rule->name] = $rule->title;
//            }
////            dd($auth_list);
//            $subject = preg_replace("/\?.+/", "", $_SERVER['REQUEST_URI']);
//            $subject = preg_replace("/\/\d$/", "", $subject);
////            dd($subject);
//            if (array_key_exists($subject, $auth_list))
//            {
////                //验证用户是否具备操作权限
                $rulesid = DB::table("admin_group")
                        ->join("admin_auth","admin_group.gid","=","admin_auth.gid")
                        ->orWhere("admin_group.uid", Session::get("userData")->admin_id)
                        ->pluck("rules");
//                dd($rulesid);
//                $rules = DB::table("admin_auth")->where("gid", $gid)->pluck("rules");//1,2,3,4,5,6
//                $ruleid = DB::table("admin_rule")->where("name", $subject)->pluck("id");
//                
          
                if (!in_array($rules->id, explode(",", $rulesid)))
                {
//                    if(in_array($subject, ["/Admin/group/setRule", "/Admin/user/setGroup"]))  return response(["status" => 0, "info" => "对不起，你无权操作！"]);
                    return redirect("/errors/cominfo")->with(["info" => "对不起，您没有".$rules->title."权限", "url" => $_SERVER['HTTP_REFERER']]);
                }
//            }
        }
        return $next($request);
    }
}
