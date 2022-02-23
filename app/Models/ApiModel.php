<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiModel extends Model
{
    use HasFactory;

    public static function events($total){
        $token = 'daffodilvarsity-parents';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://daffodilvarsity.edu.bd/api/v1/events/'.$total.'/'.$token,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        curl_close($curl);
//        dd(( json_decode($response)));
        return json_decode($response);
    }
}
