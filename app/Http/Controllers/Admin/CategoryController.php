<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class CategoryController extends Controller
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
    public function getCatelist()
    {
        $categories = DB::table("category")->orderByRaw("CONCAT_WS(',',path,cid)")->get();
       
        foreach($categories as $key=>$tmp)
        {
           if($tmp->pid==0){
                $categories[$key]->cname = "<img src='/images/admin/common/dirfirst.gif'  />&nbsp;".$tmp->cname; 
           }else if(substr_count($tmp->path,',')==1){
                $categories[$key]->cname = "<img src='/images/admin/common/dirsecond.gif'align='absmiddle' />&nbsp;".$tmp->cname; 
           }else{
                 $categories[$key]->cname = str_repeat("·&nbsp;", substr_count($tmp->path, ",")*6).$tmp->cname;
           }
           
           if((DB::table("category")->where("pid",$tmp->cid)->first()!==null)|| (DB::table("goods")->where("cid",$tmp->cid)->first()!==null))
           {
               $del[]=0;
           }else{
               $del[]=1;//没有子类或没有商品则显示删除按钮
           }
               
        }

        return view("admin.category.catelist",compact("categories","del"));
    }
    
    public function getCatedel($cid)
    {
        $affectedRows=DB::table("category")->where("cid",$cid)->delete();
        if($affectedRows>0)
        {
            return back()->with(['info'=>'删除成功']);
        }else{
            return back()->with(['info'=>'删除失败']);
        }
    }
    public function getCatea($cid=null)
    {
         if ($cid)
        {
            $data = DB::table("category")->where("cid", $cid)->first();
        }
        return view("admin.category.cateadd",compact("data"));
    }
    public function postCateadd(Request $request)
    {
         $this->validate($request,[
            "cname"=>"required",         
         ],[
            "cname.required" => "名称不能为空",
         ]);
         
        $data=$request->except("_token");
        if(false !==$insertID=DB::table("category")->insertGetId($data))
        {
            return back()->with(["info"=>"添加成功"]);
        }else
        {
            return back()->with(["info"=>"添加失败"]);
        }
    }
    public function postSetisnav(Request $request)
    {
        if(false !=DB::table("category")->where("cid",$request->get("cid"))->update(["isNav"=>$request->get("isNav")]))
        {
            return response()->json(["status"=>1,"info"=>"设置成功"]);
        }else{
            return response()->json(["status" => 0, "info" => "设置失败"]);
        }
    }
    public function getCatee($cid)
    {
         $data = DB::table("category")->where("cid", $cid)->first();
         $father= DB::table("category")->orderByRaw("CONCAT_WS(',',path,cid)")->get(); 
//         dd($father);
         {
          
         }
//        foreach($father as $key =>$tmp)
//         {
//          
//         }
       
          return view("admin.category.cateedit",compact("data","father"));
          
    }
    public function postCateedit(Request $request)
    {
         $this->validate($request,[
            "cname"=>"required",         
         ],[
            "cname.required" => "名称不能为空",
         ]);
        
        $father= DB::table("category")->where("cid",$request->get("pid"))->first();
        if(($request->get("cid"))== ($request->get("pid")))
        {
            return back()->with(["info"=>"自己不能为自己的分类"]);
        }
          $data=$request->except("_token");
          $data['path']=$father->path.",".$father->cid;
     if($affectedRows=DB::table("category")->where("cid",$request->get("cid"))->update($data) >0)
        {
            return redirect("/Admin/category/catelist")->with(["info"=>"修改成功"]);
        }else
        {
            return redirect("/Admin/category/catelist")->with(["info"=>"修改失败"]);
        }
    }
}
