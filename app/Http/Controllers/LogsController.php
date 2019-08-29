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

    public function alerts()
    {
        $alertes =array(

            array()
        );
        $repetidors_routers = DB::select('select * from repetidors_routers');
        foreach($repetidors_routers as $repetidor_router)
        {
            $log_master_routers = DB::select('select * from log_master_routers where id_router = ' .$repetidor_router->id_router);
            foreach($log_master_routers as $object)
            {
                if($object->variable == "estat" or $object->variable == "rate"){
                    $last2logs = DB::select('select * from log_routers where id_repetidor_router = ' .$repetidor_router->id_repetidor_router .' and id_log_master_routers = ' .$object->id_log_master_routers .' ORDER BY id_log_routers desc LIMIT 2');

                    if($last2logs[0]->valor != $last2logs[1]->valor)
                    {
                        $alertes[] = array("ip" => $repetidor_router->ip,"repetidor" => $repetidor_router->id_repetidor, "router" => $repetidor_router->comentaris,"objecte" => $object->objecte, "variable" => $object->variable,"valor1" =>  $last2logs[1]->valor, "valor2" => $last2logs[0]->valor  );
                    }
                }

            }
        }
        return view('alertes.index')->with('alertes',$alertes);
        return $alertes;
    }


}
