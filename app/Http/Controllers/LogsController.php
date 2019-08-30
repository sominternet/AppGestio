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
        $llistat = array
        (

        );
        $repetidors = DB::select('select * from repetidors');
        $repetidors_amb_alertes = array();
        foreach($repetidors as $repetidor)
        {

            $alertes = DB::select('select * from incidencies where id_repetidor = ' .$repetidor->codi);
            if(count($alertes) > 0)
            {
                $llistat[] = array("repetidor" => $repetidor, "teincidencia" => "si");
            }
            else $llistat[] = array("repetidor" => $repetidor, "teincidencia" => "no");
        }

        //return $llistat;
        return view ('alertes.index')->with('llistat',$llistat);
    }

    public function alerts_repetidor($id)
    {
        $alertes = DB::select('select * from incidencies where id_repetidor = ' .$id);
        return $alertes;
    }

    public function destroy($id)
    {
        DB::delete('delete from incidencies where id_incidencia = ' .$id);
    }


}
