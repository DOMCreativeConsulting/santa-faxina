<?php

namespace App\Controllers;

use App\models\Cliente;
use App\models\Arquivos;

class HomeController
{

    public function index()
    {
        return view('index');
    }

    public function painel()
    {
        die('Não há uma "view" para essa rota! <br><a href="logout">Sair</a>');
    }

    public function cadastro()
    {
        dd($_POST);
    }

}
