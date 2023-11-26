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
        $itogListName = array();
        $itogListIMG = array();
        $itogListDecription = array();
        $itogListReiting = array();

        $arrDolg = array();
        $arrShir = array();
        $arrName = array();

        $hotel = $request->input('hotel');
        $radius = $request->input('radius');
        $radius /= 111133;
        $like = array();
        if($request->input('park')){
            $like[] = "park";
        }
        if($request->input('monuments')){
            $like[] = "monuments";
        }
        if($request->input('eat')){
            $like[] = "eat";
        }
        if($request->input('religion')){
            $like[] = "religion";
        }
        if($request->input('museum')){
            $like[] = "museum";
        }

        if(empty($like)){
            $error = "вы не выбрали категорию";
            return view("alert",['errors'=>$error]);
        }
        else{
            if(DB::table('hotel')->where('name',$hotel)->exists()){

                $dolgA = DB::select("SELECT dolg FROM hotel WHERE name='$hotel'");
                $shirA = DB::select("SELECT shir FROM hotel WHERE name='$hotel'");

                $arrDolg[] = $dolgA[0]->dolg;
                $arrShir[] = $shirA[0]->shir;
                $arrName[] = $hotel;

                foreach($like as $item){
                    $id = 1;
                    $i = 0;
                    $bd = DB::table($item)->orderBy('reiting', 'desc')->get();
                    // проверить есть ли в окружности это место
                    while (true) {
                        if(DB::table($item)->where('id',$id)->exists()){
                            $rad = ($bd[$i]->shir - $shirA[0]->shir)**2 + ($bd[$i]->dolg - $dolgA[0]->dolg)**2;
                            $rad = sqrt($rad);
                            if($rad < $radius){
                                // отобразить
                                $itogListName[] = $bd[$i]->name;
                                $itogListReiting[] = $bd[$i]->reiting;
                                $itogListIMG[] = $bd[$i]->img;
                                $itogListDecription[] = $bd[$i]->decription;

                                // для карты
                                $arrDolg[] = $bd[$i]->dolg;
                                $arrShir[] = $bd[$i]->shir;
                                $arrName[] = $bd[$i]->name;
                            }
                            $id++;
                            $i++;
                        }
                        else{
                            break;
                        }
                    }
                }
                if(empty($itogListName)){
                    $error = "в выьранном радиусе ничего нет";
                    return view("alert",['errors'=>$error]);
                }
                else{
                    $count = count($itogListReiting);
                    return view("list",['count'=>$count,
                                        'listName'=>$itogListName, 
                                        'listReiting'=>$itogListReiting, 
                                        'listIMG'=>$itogListIMG, 
                                        'listDecription'=>$itogListDecription,
                                        'arrDolg'=>$arrDolg,
                                        'arrShir'=>$arrShir,
                                        'arrName'=>$arrName
                                    ]);
                }
            }
            elseif(DB::table('hotel')->where('adress',$hotel)->exists()){
                $dolgA = DB::select("SELECT dolg FROM hotel WHERE adress='$hotel'");
                $shirA = DB::select("SELECT shir FROM hotel WHERE adress='$hotel'");

                foreach($like as $item){
                    $id = 1;
                    $i = 0;
                    $bd = DB::table($item)->orderBy('reiting', 'desc')->get();
                    // проверить есть ли в окружности это место
                    while (true) {
                        if(DB::table($item)->where('id',$id)->exists()){
                            $rad = ($bd[$i]->shir - $shirA[0]->shir)**2 + ($bd[$i]->dolg - $dolgA[0]->dolg)**2;
                            $rad = sqrt($rad);
                            if($rad < $radius){
                                // отобразить
                                $itogListName[] = $bd[$i]->name;
                                $itogListReiting[] = $bd[$i]->reiting;
                                $itogListIMG[] = $bd[$i]->img;
                                $itogListDecription[] = $bd[$i]->decription;
                            }
                            $id++;
                            $i++;
                        }
                        else{
                            break;
                        }
                    }
                }
                if(empty($itogListName)){
                    $error = "в выьранном радиусе ничего нет";
                    return view("alert",['errors'=>$error]);
                }
                else{
                    $count = count($itogListReiting);
                    return view("list",['count'=>$count ,'listName'=>$itogListName, 'listReiting'=>$itogListReiting, 'listIMG'=>$itogListIMG, 'listDecription'=>$itogListDecription]);
                }
            }
            // мы не знаем такого ателя
            $error = "мы не знаем такого ателя";
            return view("alert",['errors'=>$error]);
        }
    }
}
