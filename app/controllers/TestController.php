<?php

namespace App\Controllers;

class TestController extends Controller
{
    public function index()
    {
        $url = 'srvappsf01.azurewebsites.net/integracao.dll/entidade';
        $data = $_POST;
        $userName = 'integracao';
        $password = '4078op69';
        
        $curlHandler = curl_init();

        curl_setopt_array($curlHandler, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'], 
            CURLOPT_USERPWD => $userName . ':' . $password,
            CURLOPT_POSTFIELDS => json_encode($data)
        ]);

        $response = curl_exec($curlHandler);
        curl_close($curlHandler);

        if($response !== 'True') {
            header('HTTP/1.1 500 Internal Server Error');
            echo $response;
            var_dump($data);
        } else {
            return;
        }        
        return;
    }
}
