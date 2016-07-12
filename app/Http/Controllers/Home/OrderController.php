<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function ladyDress()
    {
        // 女装页面
        return view("home.dress");
    }
    
    public function particulars()
    {
        // 女装详情页
        return view("home.particulars");
    }
    
    public function living()
    {
        //显示居家分类
        return view("home.living");
    }

    public function details($gid)
    {   
        $deta = DB::table("goods")
        ->leftJoin("category", "category.cid", "=", "goods.cid")
        ->where("gid", $gid)->get();
        // dd($deta);
        
        return view("home.details", compact("deta"));
    }
    
    public function sublink($cid)
    {
        // 查询主类下的所属子类
        $result = DB::table("category")->where("pid", $cid)->get();
        
        foreach($result as $key=>$tmp){
            $id = $tmp->cid;
            $resource = DB::table("goods")
            ->leftJoin("category", "category.cid", "=", "goods.cid")
            ->where("category.pid", $cid)
            ->paginate(8);
            return view("home.subclass", compact("result", "resource"));
        }
        // dd($resource);
        // 子分类通用模板
        // return view("home.subclass", ["result" => $result, "resource" => $resource]);
    }

    public function shows($cid)
    {
        $resource = DB::table("goods")
        ->leftJoin("category", "category.cid", "=", "goods.cid")
        ->where("category.cid", $cid)
        ->get();

        return view("home.subclass", compact("resource"));
    }
}
