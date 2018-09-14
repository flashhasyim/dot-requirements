<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Rajaongkir;
use App\Models\Province as ProvinceModel;
use App\Models\City as CityModel;
use Illuminate\Support\Facades\Auth; 

class Localization extends Controller
{
    public function search($type,Request $request){
        $response   = (env('LOCAL_RESOURCES')) ? $this->searchLocal($type, $request) : $this->searchOnline($type, $request);
        return response()->json($response);
    }

    /**
     * Local search request implementation
     */
    private function searchLocal($type, $request){
        switch($type){
            case 'provinces':
                $table  = ProvinceModel::get();
            break;

            case 'cities':
                $table  = CityModel::get();
            break;

            default:
                return "Request Not Found !";
            break;
        }

        if($request->id && $request->province){
            $table = $table->where('id',$request->id)->where('province_id',$request->province)->first();
        }else if($request->id) {
            $table = $table->find($request->id);
        }

        return $table;
    }

    /**
     * Online Search request implementation
     */
    private function searchOnline($type, $request){
        switch($type){
            case 'provinces':
                return Rajaongkir::getProvince($request->id);
            break;

            case 'cities':
                return Rajaongkir::getCity($request->id,$request->province);
            break;

            default:
                return "Request Not Found !";
            break;
        }
    }
}
