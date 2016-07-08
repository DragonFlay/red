<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\CommonController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Validator;
use Hash;
class AdminController extends CommonController {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
 
    }

    public function adminList(Request $request) {
//       dd(DB::table('admin')->get());
        $admin = DB::table("admin")
                ->leftJoin("admin_group", "admin.admin_id", "=", "admin_group.uid")
                ->where("admin.username", "like", '%' . $request->get('keyword') . '%')
                ->paginate(2);
//       dd($admin);
        $groups = DB::table("admin_auth")->get();


//       dd($groups);
        return view("admin.auth.adminList", ['admin' => $admin, "groups" => $groups, 'keyword' => $request->get('keyword')]);
    }

    public function setAdminGroup(Request $request) {
        
        if (FALSE !== DB::table("admin_group")->where("uid", $request->get("uid"))->update(["gid" => $request->get("gid")])) {
            return response()->json(["status" => 1, "info" => "修改成功"]);
        } else {
            return response()->json(["status" => 0, "info" => "修改失败"]);
        }
    }
    public function adminDel(Request $request){
        if(FALSE!==DB::table("admin")->where("admin_id", $request->get("uid"))->delete()){
             return response()->json(["status" => 1, "info" => "删除成功"]);
        }else{
             return response()->json(["status" => 0, "info" => "删除失败"]);
        }
            
    }

    public function adminLock(Request $request) {
        if(FALSE !== $admin = DB::table("admin")->where("admin_id",$request->get("uid"))){
            if($admin->pluck("is_lock")=="正常"){
                $admin->update(["is_lock"=>"锁定"]);
                
            }else{
                
                $admin->update(["is_lock"=>"正常"]);
              
            }
            return response()->json(["status"=>1,"info"=>"修改成功"]);
        }
        
       
        
//      if($admin = DB::table("admin")->where("admin_id",$id)){
//      dd($admin);
//      if($admin->is_lock=="正常"){
//          $admin->is_lock ="锁定";
//          $admin->save();
//          return view("admin.auth.list");
//      }else{
//          $admin->is_lock ="正常";
//          $admin->save();
//          return view("admin.auth.list");
//      }
//      }
    }
    public function aAdd()
    {
           $group = DB::table("admin_auth")->get();
          return view("admin.auth.adminAdd",compact("group"));
    }
     public function adminAdd(Request $request)
        {
//         $data = $request->only("username","password","repassword");
         $this->validate($request,[
            "username"=>"required|unique:admin",
             "password"=>"required|between:6,15",
             "repassword" => "required|same:password",
         ],[
            "username.required" => "账号不能为空",
            "username.unique" => "该账号已被占用",
            "password.required" => "密码未填写",
            "password.between" => "密码长度应为6-15位",
            "repassword.required" => "确认密码未填写",
            "repassword.same" => "两次密码输入不一致",
         ]);
         
        
                $data = $request->only("username","password");
                $data['password']=Hash::make($data['password']);
                if(FALSE !== $id = DB::table("admin")->insertGetId($data))
                {
                    DB::table("admin_group")->insert(['uid'=>$id,'gid'=>$request->get('gid')]);
                   return back()->with(["info" => "添加成功！！！"]);
                }else
                {
                    return back()->with(["info" => "添加失败！！！"]);
                }
        

         
         
           
        }
        
        
        
    
   public function aEdit($id)
   {
       $admin=DB::table("admin")
               ->leftJoin("admin_group","admin_id","=","admin_group.uid")
               ->where("admin_id",$id)
              ->first();
      $group = DB::table("admin_auth")->get();
      Session::put("username",$admin->username);
     
       return view("admin.auth.adminEdit",compact("admin","group"));
   }
     public function adminEdit(Request $request)
   {    
//         dd($request->get('uid'));
  
             $this->validate($request,[
               
                 "password"=>"between:6,15",
                 "repassword" => "same:password",
             ],[ 
                
                "password.between" => "密码长度应为6-15位",
                "repassword.same" => "两次密码输入不一致",
             ]); 
             if(!empty($request->password)){
                 $data = $request->only("password","gid");
                 $data['password']=Hash::make($data['password']);
                 DB::table("admin")
                         ->leftJoin("admin_group","admin_group.uid","=","admin.admin_id")
                         ->where("admin_id",$request->get("uid"))
                         ->update($data);  
                   return redirect("/Admin/auth/adminList")->with(['info'=>'修改成功']);
             }else{
                 $data=$request->only("gid");
                  DB::table("admin")
                         ->leftJoin("admin_group","admin_group.uid","=","admin.admin_id")
                         ->where("admin_id",$request->get("uid"))
                         ->update($data);  
                  return redirect("/Admin/auth/adminList")->with(['info'=>'修改成功']);
             }
    
           
   }
   public function adminSelf()
   {
       
   }
   public function adminAvartar()
   {
       
   }
   
   
  
   
   public function ruleList()
   {
       $rules=DB::table("admin_rule")->get();
       return view("admin.auth.ruleList",compact("rules"));
   }
   public function rEdit($id)
   {
       $rule=DB::table("admin_rule")->where("id",$id)->first();
  
       return view("admin.auth.ruleEdit",compact("rule"));
   }
   public function ruleEdit(Request $request,$id)
   {
       $this->validate($request, [
            "title" => "required",
            "name" => "required",
        ], [
            "title.required" => "规则名称未填写",
            "name.required" => "规则设置未填写",
        ]);
      $data = $request->only("title", "name", "status");
        if (false !== DB::table("admin_rule")->where("id", $id)->update($data))
        {
            return redirect("/Admin/auth/ruleList")->with(["info" => "修改成功"]);
        } else 
        {
           return redirect("/Admin/auth/ruleList")->with(["info" => "修改失败"]);
        }
   }
   public function ruleAdd(Request $request){
        $this->validate($request, [
            "title" => "required",
            "name" => "required",
        ], [
            "title.required" => "规则名称未填写",
            "name.required" => "规则设置未填写",
        ]);
        $data = $request->except("_token");
        if (false !== $insertID = DB::table("admin_rule")->insertGetId($data))
        {
            return redirect("/Admin/auth/ruleList")->with(["info" => "添加成功，ID:".$insertID]);
        } else
        {
            return back()->with(["info" => "添加失败"]);
        }
    
   }
   public function ruleDel($id){
     
       if (false !== DB::table("admin_rule")->where("id", $id)->delete())
        {
             return redirect("/Admin/auth/ruleList")->with(["info" => "删除成功"]);
        } else 
        {
            return redirect("/Admin/auth/ruleList")->with(["info" => "删除失败"]);
        }
   }
     public function groupList()
   {
    $groups =  DB::table("admin_auth")->get();
    $rules = DB::table("admin_rule")->get();
       return view("admin.auth.groupList",compact("groups","rules"));
   }
   
   public function setAuth(Request $request){
       $rules = explode(",",DB::table("admin_auth")->where("gid",$request->get("group"))->pluck("rules"));
       //判断是添加还是删除分组的权限
      if(false !== $key = array_search($request->get("rule"),$rules))
    {
          unset($rules[$key]);
    }else{
        array_push($rules,$request->get("rule"));
    }
     //修改分组对应的权限
    if(false !==$affectedRows = DB::table("admin_auth")->where("gid",$request->get("group"))->update(["rules"=>join(",",$rules)]))
    {
        return response()->json(["status"=>1,"info"=>"更改成功"]);
    }else{
        return response()->json(["status"=>0,"info"=>"更改失败"]);
    }
   }
  public function gAdd()
  {
      $rules = DB::table("admin_rule")->get();
        return view("admin.auth.groupAdd", compact("rules"));
  }
  public function groupAdd(Request $request)
  {
       $this->validate($request,[
            "title"=>"required|unique:admin_auth",
            "rules"=>"required",
        ],[
            "title.required"=>"名称未填写",
            "title.unique"=>"名称重复",
            "rules.required"=>"分组权限未填写",
        ]);
        $data=$request->only("title","rules");
        $data["rules"]=join(",",$data["rules"]);
        if(false !==$insertId = DB::table("admin_auth")->insertGetId($data))
        {
            return redirect("/Admin/auth/groupList")->with(["info"=>"添加成功"]);
        }else{
             return back()->with(["info"=>"添加失败"]);
        }
  }
   public function gEdit($gid)
   {
       $group = DB::table("admin_auth")->where("gid",$gid)->first();
       $rules = DB::table("admin_rule")->get();
       return view("admin.auth.groupEdit",compact("group","rules"));
   }
   public function groupEdit(Request $request,$gid)
   {
        $this->validate($request,[
            "title"=>"required",
            "rules"=>"required",
        ],[
            "title.required"=>"名称未填写",
            "rules.required"=>"分组权限未填写",
        ]);
        
        $data=$request->only("title","rules");
        $data["rules"]=join(",",$data["rules"]);
        if(false!==$affectedRows=DB::table("admin_auth")->where("gid",$gid)->update($data))
        {
            return redirect("/Admin/auth/groupList")->with(["info"=>"修改成功"]);
        }else
        {
            return redirect("/Admin/auth/groupList")->with(["info"=>"修改失败"]);
        }
       
   }
   
}
