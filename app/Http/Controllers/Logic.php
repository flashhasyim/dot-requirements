<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logic extends Controller
{
    public function quick(Request $request){

        $result     = $this->run($request);
        return view('logic',$result);

    }

    private function run($request){

        if(!$request->value || !$request->method){
            return [];
        }
        $request->validate([
            'method'=> 'in:condition,basic'
        ]);

        $var    = explode(',',$request->value);
        $temp   = array_unique($var);
        rsort($temp);

        return [
            "result"   => (!isset($temp[1])) ? $temp[0] : $temp[1],
            "temp"     => $temp,
            "var"      => $var
        ];

    }
}
