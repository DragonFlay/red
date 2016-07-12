<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Validator;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   public function userAdd(){
       return view("admin.user.useradd");
   }

   public function userList(Request $request)
   {
      $user=DB::table("users")
              ->join("user_level","user_level.lid","=","users.level")
              ->where("username","like",'%'.$request->get('keyword').'%')
               ->orWhere("nickname","like",'%'.$request->get('keyword').'%')
              ->paginate(5);
      
      return view("admin.user.userList",['user'=>$user,'keyword'=>$request->get('keyword')]);
   }
   public function uEdit($id)
   {
       $user = DB::table("users")
               ->where("users.user_id",$id)
               ->first();
       return view("admin.user.userEdit",compact("user"));
   }
   public function userEdit(Request $request)
   {
//      dd($request->get("sex")['0']);
        $this->validate($request,[
                 "nickname"=>"required",
                 "password"=>"between:6,15",
                 "repassword" => "same:password",          
             ],[ 
                "nickname.required"=>"昵称不能为空",
                "password.between" => "密码长度应为6-15位",
                "repassword.same" => "两次密码输入不一致",
             ]);
        if(!empty($request->password)){
                 $data = $request->only("password","nickname","sex","qq","phone");
                  $data['sex']=$data['sex']['0'];
                 $data['password']=Hash::make($data['password']);
                 DB::table("users")
                         ->where("user_id",$request->get("uid"))
                         ->update($data);  
                   return redirect("/Admin/user/userList")->with(['info'=>'修改成功']);
             }else{
                 $data=$request->only("nickname","sex","qq","phone");
                 $data['sex']=$data['sex']['0'];
             
                  DB::table("users")
                         ->where("user_id",$request->get("uid"))
                         ->update($data);  
                  return redirect("/Admin/user/userList")->with(['info'=>'修改成功']);
             }
    
   }

  

  
}
