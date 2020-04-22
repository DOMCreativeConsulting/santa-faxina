<?php

namespace App\Controllers;

use App\models\Cliente;

class ClientesController extends Controller
{

    public function cadastrar()
    {
        $dados = $_POST;
        date_default_timezone_set('America/Sao_Paulo');
        $dados['data_cadastro'] = date('d-m-Y');
        $dados['hora_cadastro'] = date('H:i:s');

        Cliente::create($dados);
    }

    public function index()
    {
        $url = 'srvappsf01.azurewebsites.net/isapi.dll/entidade';
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