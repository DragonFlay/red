<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Validator;
use Hash;
class GoodsController extends Controller
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
    public function getGoodsa()//定位到商品添加页
    {
          //查询所有的分类
        $categories = DB::table("category")->orderByRaw("CONCAT_WS(',',path, cid)")->get();
        foreach ($categories as $key=>$cate)
        {
            $categories[$key]->cname = "|".str_repeat("--",substr_count($cate->path, ",")*4).$cate->cname;
        }
 
       return view("admin.goods.goodsadd",compact("categories"));
    }
    public function postGoodsadd(Request $request)//添加商品到数据库
    {
        $this->validate($request,[
            "name"=>"required|between:0,40",
            "price"=>"sometimes|numeric",
            "storeNum"=>"sometimes|integer",
            "cid" =>"required",
         ],[
             "cid.required"=>"没有选择分类",
            "name.required" => "名称不能为空",
             
             "price.numeric"=>"价格必须是数字",
             "storeNum.integer"=>"数量必须是整数",
             "name.between"=>"名称超出长度规定范围"
         ]);
         $data=$request->except('_token');
         if($data['price']==''){$data['price']='0.00';}
         if($data['storeNum']==''){$data['storeNum']='0';}
         if($data["im"]==''){$data['im']='shangping.jpg';}
//         if($data[''])
          if (false !== $insertID = DB::table("goods")->insertGetId($data))
        {
            return back()->with(["info" => "添加成功 ID : ".$insertID]);
        }
        
         
    }
    public function postIm(Request $request)//上传商品图片
    {
        $file = $request->file("Filedata");
        //新的文件名
        $rename = date("YmdHis").rand(1000, 9999).".".$file->getClientOriginalExtension();
        //新的文件地址
        if ($file->move("./uploads/goods/", $rename))
        {
            return response()->json(["status" => 1, "info" =>$rename]);
        } else
        {
             return response()->json(["status" => 0, "info" => "上传失败"]);
        }
    }
    public function getGoodslist(Request $request)
    {
        $goods = DB::table("goods")
                ->join("category","category.cid","=","goods.cid")
                ->where("goods.name", "like", '%' . $request->get('keyword') . '%')
                ->paginate(3);
//        dd($goods);
        return view("admin.goods.goodslist",["goods"=>$goods,'keyword' => $request->get('keyword')]);
    }
    public function postIssale(Request $request)//是否上架
    {
       $good= DB::table("goods")->where("gid",$request->get("gid"))->first();
       if($good->isSale=='Y')
       {
           DB::table("goods")->where("gid",$request->get("gid"))->update(['isSale'=>'N']);
           return response()->json(['status'=>1,'info'=>'修改成功']);
       }else
       {
            DB::table("goods")->where("gid",$request->get("gid"))->update(['isSale'=>'Y']);
            return response()->json(['status'=>1,'info'=>'修改成功']);
       }
    }
    public function postIsnew(Request $request)//是否新品
    {
       $good= DB::table("goods")->where("gid",$request->get("gid"))->first();
       if($good->isNew=='Y')
       {
           DB::table("goods")->where("gid",$request->get("gid"))->update(['isNew'=>'N']);
           return response()->json(['status'=>1,'info'=>'修改成功']);
       }else
       {
            DB::table("goods")->where("gid",$request->get("gid"))->update(['isNew'=>'Y']);
            return response()->json(['status'=>1,'info'=>'修改成功']);
       }
    }
    public function postIsrecom(Request $request)//是否推荐
    {
       $good= DB::table("goods")->where("gid",$request->get("gid"))->first();
       if($good->isRecom=='Y')
       {
           DB::table("goods")->where("gid",$request->get("gid"))->update(['isRecom'=>'N']);
           return response()->json(['status'=>1,'info'=>'修改成功']);
       }else
       {
            DB::table("goods")->where("gid",$request->get("gid"))->update(['isRecom'=>'Y']);
            return response()->json(['status'=>1,'info'=>'修改成功']);
       }
    }
    public function postIshot(Request $request)//是否热卖
    {
       $good= DB::table("goods")->where("gid",$request->get("gid"))->first();
       if($good->isHot=='Y')
       {
           DB::table("goods")->where("gid",$request->get("gid"))->update(['isHot'=>'N']);
           return response()->json(['status'=>1,'info'=>'修改成功']);
       }else
       {
            DB::table("goods")->where("gid",$request->get("gid"))->update(['isHot'=>'Y']);
            return response()->json(['status'=>1,'info'=>'修改成功']);
       }
    }
    public function postGooddel(Request $request)//商品删除
    {
        //有订单不能删除
    }
    
    public function postChangestore(Request $request)//修改数量
    {
        $good = DB::table("goods")->where("gid",$request->get("gid"))->first();
        if(   DB::table("goods")->where("gid",$request->get("gid"))->update(['storeNum'=>$request->get("num")]) >0)
        {
             return response()->json(['status'=>1,'info'=>'修改成功']);
        }  else {
             return response()->json(['status'=>0,'info'=>'修改失败']);
        }
    }
    public function getStandlist(Request $request)//商品规格页
    {
          $cid=DB::table("stand")->get();
          foreach($cid as $k =>$v)
          {
             $b[]=$v->cid;
          }
          $b=array_unique($b);
          
          
           $cids=DB::table("category")
                  ->whereIn("category.cid",$b)
                  ->get(); 
           
            if($request->get("keyword")!==null){
            $b=null;
            $b[]=$request->get("keyword");
           }
           
            $stands=DB::table("stand")
                  ->leftJoin("category","category.cid","=","stand.cid")
                  ->whereIn("category.cid",$b)
                  ->paginate(2);  
           
           
//           dd($cids);
//          $cids = $stands;
//          dd($cids);
//          dd($stands);
        return view("admin.goods.standlist",compact("stands","cids"));
    }
    public function getStanda()//定位到规格添加页
    {
          $cate=DB::table("category")->get();
          foreach($cate as $key=>$value){
              if(substr_count($value->path,",")>0){
              $a[]=substr($value->path,strrpos($value->path,",")+1);
              }
          }
           $cids=DB::table("category")
                  ->whereIn("category.pid",$a)
                  ->get(); 
          return view("admin.goods.standadd",compact("cids"));
    }
    public function postStandadd(Request $request)
    {
      $this->validate($request,[
            "title"=>"required",
            "extra"=>"required",     
         ],[
             "extra.required"=>"规格项不能为空，请用逗号隔开",
            "title.required" => "规格名称不能为空",      
         ]);   
      $data=$request->except("_token");
//      dd($data);
     if( DB::table("stand")->insertGetId($data)>0){
         return back()->with(["info"=>"添加成功"]);
     }
    }
    public function getStande($sid)//定位到规格编辑页
    {
         $cate=DB::table("category")->get();
          foreach($cate as $key=>$value){
              if(substr_count($value->path,",")>0){
              $a[]=substr($value->path,strrpos($value->path,",")+1);
              }
          }
           $cids=DB::table("category")
                  ->whereIn("category.pid",$a)
                  ->get();
           $stand = DB::table("stand")->where("sid",$sid)->first();
        return view("admin.goods.standedit",compact("cids","stand"));
    }
    public function postStandedit(Request $request)
    {
         $this->validate($request,[
            "title"=>"required",
            "extra"=>"required",     
         ],[
             "extra.required"=>"规格项不能为空，请用逗号隔开",
            "title.required" => "规格名称不能为空",      
         ]); 
          $data=$request->except("_token");
//          dd($data['sid']);
     if( DB::table("stand")->where("sid",$data['sid'])->update($data)>0){
         return redirect("/Admin/goods/standlist")->with(["info"=>"修改成功"]);
     }
    }
    public function getGoodsg()//
    {
//        $good=DB::table("goods")
//                ->leftJoin("special","goods.gid","=","special.gid")
//                ->where("goods.gid",$gid)
//                ->first();
//        dd($good);
//      $
        return view("admin.goods.goodsspecial",compact("good"));
    }
    public function getGoodsx($gid)//定位商品详情页
    {
        return view("admin.goods.goodsdetail");
    }
    public function getGoodsb($gid)//定位商品编辑页
    {
        
    }
}
