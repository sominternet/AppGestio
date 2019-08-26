<?php

namespace App\Http\Controllers;
use App\log_routers;
use DB;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index($id, $id_repetidor_routers)
    {   
        return $logs_repetidor_routers   = DB::select('select * from log_routers log_master_routers where id_repetidor_router = '.$id_repetidor_routers .' and LIMIT 10' , [1]);

    }

}
