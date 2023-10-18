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
        if($request->input('torg_centr')){
            $like[] = "torg_centr";
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

                $id = 1;
                foreach($like as $item){
                    // проверить есть ли в окружности это место
                    while (true) {
                        if(DB::table($item)->where('id',$id)->exists()){
                            $dolg = DB::select("SELECT dolg FROM $item WHERE id=$id");
                            $shir = DB::select("SELECT shir FROM $item WHERE id=$id");

                            $rad = ($shir[0]->shir - $shirA[0]->shir)**2 + ($dolg[0]->dolg - $dolgA[0]->dolg)**2;
                            $rad = sqrt($rad);
                            if($rad < $radius){
                                // отобразить
                                $name = DB::select("SELECT * FROM $item WHERE id=$id");
                                $itogListName[] = $name[0]->name;
                                $itogListReiting[] = $name[0]->reiting;
                                $itogListIMG[] = $name[0]->img;
                                $itogListDecription[] = $name[0]->decription;
                            }
                            $id++;
                        }
                        else{
                            break;
                        }
                    }
                }

                $count = count($itogListReiting);
                return view("list",['count'=>$count ,'listName'=>$itogListName, 'listReiting'=>$itogListReiting, 'listIMG'=>$itogListIMG, 'listDecription'=>$itogListDecription]);
            }
            elseif(DB::table('hotel')->where('adress',$hotel)->exists()){
                $dolgA = DB::select("SELECT dolg FROM hotel WHERE adress='$hotel'");
                $shirA = DB::select("SELECT shir FROM hotel WHERE adress='$hotel'");

                $id = 1;
                foreach($like as $item){
                    // проверить есть ли в окружности это место
                    while (true) {
                        if(DB::table($item)->where('id',$id)->exists()){
                            $dolg = DB::select("SELECT dolg FROM $item WHERE id=$id");
                            $shir = DB::select("SELECT shir FROM $item WHERE id=$id");

                            $rad = ($shir[0]->shir - $shirA[0]->shir)**2 + ($dolg[0]->dolg - $dolgA[0]->dolg)**2;
                            $rad = sqrt($rad);
                            if($rad < $radius){
                                // отобразить
                                $name = DB::select("SELECT * FROM $item WHERE id=$id");
                                $itogListName[] = $name[0]->name;
                                $itogListReiting[] = $name[0]->reiting;
                                $itogListIMG[] = $name[0]->img;
                                $itogListDecription[] = $name[0]->decription;
                            }
                            $id++;
                        }
                        else{
                            break;
                        }
                    }
                }
                $count = count($itogListReiting);
                return view("list",['count'=>$count ,'listName'=>$itogListName, 'listReiting'=>$itogListReiting, 'listIMG'=>$itogListIMG, 'listDecription'=>$itogListDecription]);
            }
            // мы не знаем такого ателя
            $error = "мы не знаем такого ателя";
            return view("alert",['errors'=>$error]);
        }
    }
}
