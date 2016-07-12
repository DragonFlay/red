<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Validator;
use Hash;
class OrderController extends Controller
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

    public function getOrderlist()//订单列表
    {
     
        $orders=DB::table("order")
                ->join("goods","order.gid","=","goods.gid")
                ->leftjoin("users","users.user_id","=","order.user_id")
                ->paginate(8);
        return view("admin.order.orderlist",compact('orders'));
    }
    public function getDeliverlist()//发货列表
    {
        $delivers = DB::table("order")
                ->leftJoin("users","users.user_id","=","order.user_id")
                ->where("order.order_status",1)
                ->where("order.pay_status",1)
                ->paginate(8);
        return view("admin.order.deliverlist",compact("delivers"));
    }
    public function getDelivere($id)//定位到发货单编辑页
    {
         $deliver = DB::table("order")
                ->join("goods","goods.gid","=","order.gid")
                ->leftJoin("users","order.user_id","=","users.user_id")
                ->where("order.order_id",$id)                
                ->first();
        return view("admin.order.deliveredit",compact("deliver"));
    }
     public function postDeliveredit(Request $request)
    {
   
         $data=$request->only("ship_code");
         $deliver=DB::table("order")->where("order_id",$request->get("order_id"))->first();
        if($deliver->deli_status == 0){
              $this->validate($request,[
            "ship_code"=>"required|unique:order|numeric",        
         ],[
            "ship_code.required"=>"配送单号必须填写",
             "ship_code.unique"=>"配送单号不能重复",
             "ship_code.numeric"=>"配送单号必须是数字",
             
         ]);
              
            $data['deli_status']=1;
            DB::table("order")->where("order_id",$request->get("order_id"))->update($data);
            return back()->with(['info'=>'发货成功']);
        }else{
            $data['deli_status']=0;
            $data['ship_code']='';
             DB::table("order")->where("order_id",$request->get("order_id"))->update($data);
             return back()->with(['info'=>'成功取消发货']);
        }
        
//         DB::table("order")->where("order_id",$request->get("order_id"))->update();
    }
    public function getReturnlist()//退货列表
    {
        $returns = DB::table("return")->get();
        return view("admin.order.returnlist",compact("returns"));
    }
   
    public function getOrdere($id)//定位到订单编辑页
    {
        $order = DB::table("order")
                ->join("goods","goods.gid","=","order.gid")
                ->leftJoin("users","order.user_id","=","users.user_id")
                ->where("order_id",$id)
                ->first();
//        dd($order);
        return view("admin.order.orderedit",compact("order"));
    }
    public function postOrderedit(Request $request)//订单编辑
    {
//      
        $order = DB::table("order")->where("order_id",$request->get("order_id"))->first();
//        $data=$request->only("");
//        dd($order->order_status);
        if($order->order_status==0){
              DB::table("order")->where("order_id",$request->get("order_id"))->update(['order_status'=>1]);
              return back()->with(['info'=>'成功确认']);
        }else{
            DB::table("order")->where("order_id",$request->get("order_id"))->update(['order_status'=>0]);
             return back()->with(['info'=>'成功取消']);
        }
        
    }
}
