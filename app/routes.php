<?php

$folder = 'santa-faxina';

$router->post("$folder/login", 'UsersController@login', 'public');
$router->get("$folder/logout", 'UsersController@logout', 'public');

$router->get("$folder/recuperar-senha", 'UsersController@recuperarSenha', 'public');

$router->post("$folder/enviar-email", 'EmailController@enviar', 'public');
$router->post("$folder/atualizar-senha", 'UsersController@atualizarSenha', 'public');

$router->get("$folder/perfil", 'UsersController@perfil', 'public');

$router->get("$folder", 'HomeController@index', 'public');
$router->get("$folder/home", 'HomeController@index', 'public');
$router->get("$folder/painel", 'HomeController@painel', 'public');
