<?php

$folder = 'santa-faxina';

$router->post("$folder/login", 'UsersController@login');
$router->get("$folder/logout", 'UsersController@logout');

$router->get("$folder/recuperar-senha", 'UsersController@recuperarSenha');

$router->post("$folder/enviar-email-boas-vindas", 'EmailController@enviarEmailBoasVindas');
$router->post("$folder/enviar-email-cadastro", 'EmailController@enviarEmailCadastro');
$router->post("$folder/enviar-email", 'EmailController@enviarEmailSolicitacao');
$router->post("$folder/enviar-email-token", 'EmailController@enviarToken');
$router->post("$folder/atualizar-senha", 'UsersController@atualizarSenha');

$router->get("$folder/perfil", 'UsersController@perfil');

$router->post("$folder/cadastrar", 'ClientesController@cadastrar');
$router->post("$folder/cadastrar-juridico", 'ClientesJuridicosController@cadastrar');

$router->get("$folder", 'HomeController@index');
$router->get("$folder/home", 'HomeController@index');
$router->get("$folder/juridica", 'HomeController@juridica');

$router->get("$folder/painel", 'HomeController@painel');
$router->get("$folder/painel-juridico", 'HomeController@painelJuridico');
