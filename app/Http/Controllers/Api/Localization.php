<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Rajaongkir;
use App\Models\Province as ProvinceModel;
use App\Models\City as CityModel;

class Localization extends Controller
{
    public function search($type,Request $request){

        switch($type){
            case 'provinces':
                $table  = ProvinceModel::with('cities')->get();

                if($request->id){
                    $table = $table->find($request->id);
                }

                return response()->json($table->toArray());
            break;

            case 'cities':
                $table  = CityModel::with('province')->get();

                if($request->id){
                    $table = $table->find($request->id);
                }

                return response()->json($table->toArray());
            break;

            default:
                return response()->json("Request Not Found !");
            break;
        }
    }
}
