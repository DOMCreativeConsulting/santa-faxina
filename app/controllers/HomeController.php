<?php

namespace App\Controllers;

use App\models\Cliente;
use App\models\ClienteJuridico;

class HomeController
{

    public function index()
    {
        return view('index');
    }

    public function juridica()
    {
        return view('juridica');
    }

    public function painel()
    {
        $clientes = Cliente::get();
        $clientesJuridicos = ClienteJuridico::get();

        return view('painel', compact('clientes','clientesJuridicos'));
    }

    public function painelJuridico()
    {
        $clientes = Cliente::get();
        $clientesJuridicos = ClienteJuridico::get();

        return view('painel-juridico', compact('clientes','clientesJuridicos'));
    }


}
