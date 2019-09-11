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

}