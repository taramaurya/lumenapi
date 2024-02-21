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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) {

    $router->post('login', 'EmployeeController@index');

    // Show ALL task
    $router->get('/task', 'TaskController@index');

    //show Each task By ID
    $router->get('/task/{id}', 'TaskController@show');

    //store task
    $router->post('/task/create', 'TaskController@store');

    //update task
    $router->post('/task/update/{id}', 'TaskController@update');

    // Delete
    $router->delete('/task/delete/{id}', 'TaskController@destroy');
    

    $router->get('authors',  ['uses' => 'AuthorController@showAllAuthors']);
  
    $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);
  
    $router->post('authors', ['uses' => 'AuthorController@create']);
  
    $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);
  
    $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
  });