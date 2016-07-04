<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CommonController;
use Session;
use DB;
use Laravel\Verify;
class IndexController extends CommonController {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view("admin.index");
        
    }
    public function login()
    {
    
    }
    public function modMenu($id)
    {  
 
       
    }
    public function vertify()
    {
      
    }
}

  