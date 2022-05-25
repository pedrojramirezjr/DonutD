<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/hello there', function () use ($router) {
    return $router->app->version();
});

$router->get('/saludo/{nombre}',function($nombre){
    return 'hola mi nombre es ' .$nombre;
});

$router->get('/calcular/{edad}',function($edad){
    if($edad > 0 && $edad < 16){
        return 'Eres menor de edad';
    } else if ($edad >= 18 && $edad <= 100){
        return 'Eres mayor de edad';
    } else {
        return 'Where age';
    }
});

$router->post('/saludo',function(){
    return 'Hola estoy creando un saludo';
});

$router->put('/saludo',function(){
    return 'Hola estoy modificando mi saludo';
});

$router->delete('/saludo',function(){
    return 'Hola estoy eliminando mi saludo';
});
