<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repetidors_routers;
use DB;
class repetidors_routers_controller extends Controller
{
    public function index($id)
    { 
        $llista_repetidors_routers =  DB::select('select * from repetidors_routers where id_repetidor = '.$id, [1]);
        return view('repetidors_routers.index')->with ('llista_repetidors_routers', $llista_repetidors_routers)->with('id', $id);
    }

}
