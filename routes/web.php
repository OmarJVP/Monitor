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

$app->get('/', function () use ($app) {
    return view('monitor');
});

// $app->get('/',[
// 	'valores' => 'EtapaPacienteController@show'
// ]);

// $app->get('/monitor',function (){
// 	return ("Que onda!");
// });

$app->get('/test', 'EtapaPacienteController@test');

$app->get('/eliminar', 'EtapaPacienteController@eliminar');

$app->get('/monitor', 'EtapaPacienteController@show');

$app->get('/lista_paciente', 'EtapaPacienteController@lista');

$app->post('/salesforce', 'EtapaPacienteController@salesforce');