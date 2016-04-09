<?php


$app->group(['middleware' => 'csrf'], function() use($app){
    $app->get('/', 'App\Http\Controllers\ItemController@index');
    $app->get('/{item}', 'App\Http\Controllers\ItemController@show');

});