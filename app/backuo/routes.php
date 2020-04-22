<?php

$folder = 'santa-faxina';

$router->post("login", 'UsersController@login');
$router->get("logout", 'UsersController@logout');

$router->get("recuperar-senha", 'UsersController@recuperarSenha');

$router->post("enviar-email", 'EmailController@enviar');
$router->post("enviar-email-token", 'EmailController@enviarToken');
$router->post("atualizar-senha", 'UsersController@atualizarSenha');

$router->get("perfil", 'UsersController@perfil');

$router->post("cadastrar", 'ClientesController@cadastrar');
$router->post("cadastrar-juridico", 'ClientesJuridicosController@cadastrar');

$router->get("", 'HomeController@index');
$router->get("home", 'HomeController@index');
$router->get("juridica", 'HomeController@juridica');

$router->get("painel", 'HomeController@painel');
$router->get("painel-juridico", 'HomeController@painelJuridico');
