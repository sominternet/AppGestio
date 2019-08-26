<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use app\log_master_routers;

class Pair
{
    public $elem1;
    public $elem2;
}


class log_master_controller extends Controller
{
    public function index($id, $id_router)
    {
        $object_list =  DB::select('select * from log_master_routers where id_router = '.$id_router, [1]);

        $object_values = array(array());
        for($i = 0; $i < count($object_list); $i++)
        {
            $object_values[$i]["objecte"] = $object_list[$i]->objecte;
            $object_values[$i]["variable"] = $object_list[$i]->variable;
            $object_values[$i]["valor"] = (DB::select('select * from log_routers where id_log_master_routers = '.$object_list[$i]->id_log_master_routers ." LIMIT 1", [1]))[0]->valor;

        }
        $result = array
        (
            array()
        );
        foreach($object_values as &$object)
        {
            $newpair = new Pair();
            $newpair->elem1 = $object["variable"];
            $newpair->elem2 = $object["valor"];
            $result[$object["objecte"]][$object["variable"]] = $newpair;

        }
        $keys = array_keys($result);
        //return $result;
        return view('logs.index')->with('result',$result)->with('keys',$keys);
    }
}
