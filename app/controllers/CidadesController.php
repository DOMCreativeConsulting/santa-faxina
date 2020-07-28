<?php

namespace App\Controllers;

use App\models\Cidade;
use App\core\App;

class CidadesController extends Controller
{

    public function index()
    {
        $cidades = Cidade::get();

        foreach ($cidades as $key => $value) {
            if (mb_detect_encoding($value->nome, 'utf-8', true) === false) {
                $value->nome = mb_convert_encoding($value->nome, 'utf-8', 'iso-8859-1');
            }
        }

        return $this->responderJSON($cidades);
    }

    public function utf8ize($d) {
        if (is_array($d)) {
            foreach ($d as $k => $v) {
                $d[$k] = $this->utf8ize($v);
            }
        } else if (is_string ($d)) {
            return utf8_encode($d);
        }
        return $d;
    }
    
    
}