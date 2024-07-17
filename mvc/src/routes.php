<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index'); //get(rota que se for uma / irá pra pagina inicial, controller@metodo do controller)
$router->get('/novo','UsuariosController@add');
$router->post('/novo','UsuariosController@addAction');

$router->get('/usuario/{id}/editar','UsuariosController@edit');
$router->post('/usuario/{id}/editar','UsuariosController@editAction');
$router->get('/usuario/{id}/excluir','UsuariosController@del');
