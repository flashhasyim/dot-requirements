<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Rajaongkir;

class Shipping extends Controller
{
    public function index(){
        print_r(Rajaongkir::getCity(12));
    }

    public function search($type){

        switch($type){
            case 'province':
            break;

            case 'city':
            break;

            default:
                return reponse()->json("API Not Found !");
            break;
        }
    }
}
