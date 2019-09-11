<?php

namespace App\Controllers;

use App\Core\App;

class Controller
{

    public function responderJSON($dados)
    {
        echo json_encode($dados);
    }
    
}
