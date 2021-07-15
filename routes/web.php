<?php

Route::get('/', function () {
    return view('iniciar_sesion');
});

Route::post('/validacion-login', 'ValidacionLoginController@iniciar_sesion');