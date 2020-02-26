<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('/ejecutar-evento', 'UserTestController@ejecutarEvento')->name('ejecutar-evento');
