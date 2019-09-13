<?php

namespace App\Controllers;

use App\models\ClienteJuridico;

class ClientesJuridicosController extends Controller
{

    public function cadastrar()
    {
        $dados = $_POST;
        date_default_timezone_set('America/Sao_Paulo');
        $dados['data_cadastro'] = date('d-m-Y');
        $dados['hora_cadastro'] = date('H:i:s');

        ClienteJuridico::create($dados);
    }

}