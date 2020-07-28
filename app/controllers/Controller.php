<?php

namespace App\Controllers;

use App\Core\App;

class Controller
{

    public function responderJSON($dados)
    {
        echo json_encode($dados);
    }

    public function responderJSON2($dados)
    {
        echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE );
    }
    
}
