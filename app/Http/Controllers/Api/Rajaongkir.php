<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Rajaongkir as ApiRajaongkir;

class Rajaongkir extends Controller
{
    public function search($type,Request $request){
        switch($type){
            case 'provinces':
                $response    = ApiRajaongkir::getProvince($request->id);
            break;

            case 'cities':
                $response    = ApiRajaongkir::getCity($request->id,$request->province);
            break;

            default:
                return response()->json("Not found",404);
            break;
        }

        return response()->json($response);
    }
}
