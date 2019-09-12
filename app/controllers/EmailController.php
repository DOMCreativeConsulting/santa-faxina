<?php

namespace App\Controllers;

use App\models\Cliente;
use App\models\Email;
use App\models\User;

class EmailController extends Controller
{

    public function enviar()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        if($_POST['modalidade'] == 150){
            $modalidade = "limpeza convencional de 8 horas";
        }else{
            $modalidade = "limpeza pós obra de 8 horas";
        }

        $quantidade = $_POST['quantidade'];
        $valor = $_POST['valor'];

        $conteudo['assunto'] = $nome." acabou de solicitar um serviço.";

        $conteudo['mensagem'] = $nome." acabou de solicitar a modalidade <b>".$modalidade."</b> com <b>"
        .$quantidade."</b> profissionais, completando um valor final de <b>"
        .$valor.",00 R$.</b>";

        Email::enviar($email, 'lucasdelimamonteiro@gmail.com', $conteudo, $nome);
    }

}