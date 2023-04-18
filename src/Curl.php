<?php

namespace Aqayepardakht\Logger;

class Curl{
    
    public static function execute($value){
           $url = config('telescope.url').config('telescope.api_token');

        $ch=curl_init($url);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS, ['data' => json_encode($value)]);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-Type','application/json'));
        $result=curl_exec($ch);
        return curl_close($ch);

        // $url = config('telescope.url');
        // $auth = 'Authorization: Bearer '.config('telescope.log-token');
        // $ch=curl_init($url);
        // curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
        // curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        // curl_setopt($ch,CURLOPT_POST,1);
        // curl_setopt($ch,CURLOPT_POSTFIELDS, ['data' => json_encode($value)]);
        // curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        // curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
        // curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-Type','application/json',$auth));
        // $result=curl_exec($ch);

        // return curl_close($ch);

    }
}

