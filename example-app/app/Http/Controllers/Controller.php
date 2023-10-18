<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkRadius(Request $request){
        $itogList = array();

        $hotel = $request->input('hotel');
        $radius = $request->input('radius');
        $like = $request->input('like');

        $parkBD = DB::select('SELECT * FROM park ORDER BY reiting DESC');
        // и так импоритировать все таблицы с местами
        dd($parkBD);

        $dolgA = DB::select("SELECT dolg FROM hotel WHERE name=$hotel");
        $shirA = DB::select("SELECT shir FROM hotel WHERE name=$hotel");

        $id = 1;
        switch($like){
            case "park":
                // проверить есть ли в окружности это место
                while (true) {
                    if(DB::table('park')->where('id',$id)->exists()){
                        
                    }
                    else{
                        break;
                    }
                    $id++;
                }
                break;
            default:
                // у нас ещё нет такой котигории
                break;
        }
    }
}
