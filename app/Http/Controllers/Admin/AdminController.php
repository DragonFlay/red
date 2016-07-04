<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller {

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
        return view("admin.auth.list", ['admin' => $admin, "groups" => $groups, 'keyword' => $request->get('keyword')]);
    }

    public function setGroup(Request $request) {
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

}
