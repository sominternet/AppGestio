<?php

namespace App\Http\Controllers;
use App\log_routers;
use DB;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index($id)
    {
        // $logs = DB::select('select * from log_routers where active = ?', [1]);

    }

}
