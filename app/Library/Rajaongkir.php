<?php
namespace App\Library;
use Illuminate\Support\Facades\Response;

class Rajaongkir extends \Curl\Curl
{
    public static function getProvince(){
        $curl = new Self;
        $curl->setOpt(CURLOPT_RETURNTRANSFER , true);
        $curl->setOpt(CURLOPT_ENCODING , '');
        $curl->setOpt(CURLOPT_MAXREDIRS , 10);
        $curl->setTimeout(30);
        $curl->setOpt(CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1);
        $curl->setHeader('key', getEnv('API_RAJAONGKIR'));
        $curl->get('https://api.rajaongkir.com/starter/province');

        if ($curl->error) {
            echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";die();
        }

        return $curl->response->rajaongkir->results;
    }

    public static function getCity(int $province){
        $curl = new Self;
        $curl->setOpt(CURLOPT_RETURNTRANSFER , true);
        $curl->setOpt(CURLOPT_ENCODING , '');
        $curl->setOpt(CURLOPT_MAXREDIRS , 10);
        $curl->setTimeout(30);
        $curl->setOpt(CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1);
        $curl->setHeader('key', getEnv('API_RAJAONGKIR'));
        $curl->get('https://api.rajaongkir.com/starter/city?province='.$province);

        if ($curl->error) {
            echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";die();
        }

        return $curl->response->rajaongkir->results;
    }
}
