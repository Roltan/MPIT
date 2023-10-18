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
        // $like = $request->get('like');
        if($request->input('park')){
            $like = "park";
        }
        if($request->input('kafe')){
            $like = "kafe";
        }

        if(DB::table('hotel')->where('name',$hotel)->exists()){
            $dolgA = DB::select("SELECT dolg FROM hotel WHERE name='$hotel'");
            foreach($dolgA as $key){
                $dolgA = $key->dolg;
                break;
            }
            $shirA = DB::select("SELECT shir FROM hotel WHERE name='$hotel'");
            foreach($shirA as $key){
                $shirA = $key->shir;
                break;
            }

            $id = 1;
            switch($like){
                case "park":
                    // проверить есть ли в окружности это место
                    while (true) {
                        if(DB::table('park')->where('id',$id)->exists()){
                            $dolg = DB::select("SELECT dolg FROM park WHERE id=$id");
                            foreach($dolg as $key){
                                $dolg = $key->dolg;
                                break;
                            }
                            $shir = DB::select("SELECT shir FROM park WHERE id=$id");
                            foreach($shir as $key){
                                $shir = $key->shir;
                                break;
                            }

                            $x = ($shir - $shirA)**2;
                            $y = ($dolg - $dolgA)**2;
                            $rad = $x + $y;
                            $rad = sqrt($rad);
                            if($rad > $radius){
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
        // мы не знаем такого ателя
        dd("мы не знаем такого ателя");
    }
}
