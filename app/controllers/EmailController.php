<?php

namespace App\Controllers;

use App\models\Cliente;
use App\models\Email;
use App\models\User;

class EmailController extends Controller
{

    public function enviarEmailBoasVindas()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
		$conteudo['assunto'] = "Confirmação de Cadastro";
        $conteudo['mensagem'] = "Seja bem-vindo à Santa Faxina, $nome. <br />
        Obrigado pelo seu cadastro. Entraremos em contato o mais breve possível. <br/><br/>
        <small>Equipe Santa Faxina. <a href='http://santafaxina.com.br/'>http://santafaxina.com.br/</a><small/>";

        Email::enviar('aznuclear@gmail.com', $email, $conteudo, 'Santa Faxina');
        //contato@santafaxina.com.br
    }

    public function enviarEmailCadastro()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $conteudo['assunto'] = "$nome acabou de efetuar o cadastro em Santa Faxina.";
        $conteudo['mensagem'] = "$nome acabou de efetuar um cadastro em Santa Faxina. Verifique o sistema.
        <br />DADOS: <br />";

        foreach($_POST as $key => $dado){
            $conteudo['mensagem'] .= "<br /><b>$key:</b> $dado";
        }

        Email::enviar($email, 'aznuclear@gmail.com', $conteudo, $nome);
        //contato@santafaxina.com.br
    }

    public function enviarEmailSolicitacao()
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
        .$quantidade."</b> profissionais, completando um valor final de <b>R$"
        .$valor.",00</b><br><br>Entre em contato com o cliente o mais breve possível.";

        Email::enviar($email, 'aznuclear@gmail.com', $conteudo, $nome);
        //contato@santafaxina.com.br
    }

    public function enviarToken()
    {
        $email = $_POST['email'];
        $nome = $_POST['nome'];

        $conteudo['assunto'] = "Recuperação de senha Santa Faxina";

        Email::enviar('aznuclear@gmail.com', $email, $conteudo, $nome);
        //contato@santafaxina.com.br
    }

}