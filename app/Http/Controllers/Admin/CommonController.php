<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class CommonController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {

        if (!Session::has("userData")) {
            header("Location:/Admin/login");
            exit;
        }
    }

    public function mod_id() {
        
    }

}
