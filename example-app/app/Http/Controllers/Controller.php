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

        if(DB::table('hotel')->where('name',$hotel)->exists()){
            $dolgA = DB::select("SELECT dolg FROM hotel WHERE name=$hotel");
            $shirA = DB::select("SELECT shir FROM hotel WHERE name=$hotel");

            $id = 1;
            switch($like){
                case "park":
                    // проверить есть ли в окружности это место
                    while (true) {
                        if(DB::table('park')->where('id',$id)->exists()){
                            $dolg = DB::select("SELECT dolg FROM park WHERE id=$id");
                            $shir = DB::select("SELECT shir FROM park WHERE id=$id");

                            $s = ($shir[0] - $shirA[0])^2 + ($dolg[0] - $dolgA[0])^2;
                            $s = sqrt($s);
                            if($s > $radius){
                                // неотображать
                                dd('не нашли');
                            }
                            else{
                                // отобразить
                                $name = DB::select("SELECT name FROM park WHERE id=$id");
                                $itogList[] = $name[0];
                            }
                        }
                        else{
                            break;
                        }
                        $id++;
                    }
                    break;

                // тут добовлять case для каждой котегории

                default:
                    // у нас ещё нет такой котигории
                    dd("у нас ещё нет такой катигории");
                    break;
            }
            dd($itogList);
        }
    }
}
