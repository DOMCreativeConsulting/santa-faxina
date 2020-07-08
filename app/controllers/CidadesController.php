<?php

namespace App\Controllers;

use App\models\Cidade;
use App\core\App;

class CidadesController extends Controller
{

    public function index()
    {
        $cidades = Cidade::get();
        return $this->responderJSON($cidades);
    }
}