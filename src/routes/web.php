<?php

$namespace = "ThemeCustomizer\Http\Controllers";
Route::group([
    'namespace' => $namespace,
    'prefix' => "themecustomizer"
], function(){
    Route::get('/', 'ThemeCustomizerController@index');
    Route::get('/create', 'ThemeCustomizerController@create');
    Route::get('/show', 'ThemeCustomizerController@show');
    Route::post('/store', 'ThemeCustomizerController@store');
    Route::put('/update', 'ThemeCustomizerController@update');
    Route::delete('/delete', 'ThemeCustomizerController@destroy');
});