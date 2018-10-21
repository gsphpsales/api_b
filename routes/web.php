<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
//para padronizar as url's seguem o padrão, mudando só o método de requisição.
$router->get('/all-news', 'APIController@todasNoticias');
$router->get('/all-news/{id}', 'APIController@noticias');
$router->post('/all-news', 'APIController@adicionarNoticias');
$router->delete('/all-news/{id}', 'APIController@deletarNoticias');
$router->put('/all-news', 'APIController@alterarNoticias');
