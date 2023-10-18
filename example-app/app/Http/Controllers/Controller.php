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

        if(empty($like)){
            dd("вы не выбрали категорию");
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
                                $itogListIMG[] = $name[0]->image;
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
                // dd($itogList);
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
                                // $itogListIMG[] = $name[0]->image;
                                // $itogListSubname[] = $name[0]->subname;
                            }
                            $id++;
                        }
                        else{
                            break;
                        }
                    }
                }
            }
            // мы не знаем такого ателя
            dd("мы не знаем такого ателя");
        }
    }
}
