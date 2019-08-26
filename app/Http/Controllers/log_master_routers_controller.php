<?php

namespace App\Http\Controllers;
use DB;
use app\log_master_routers;
use app\log_routers;
use Illuminate\Http\Request;

class log_master_routers_controller extends Controller
{
 
    public function index($id, $id_router)
    {
        return $object_list = log_master_routers::all();
    }


   
}
