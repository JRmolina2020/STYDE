<?php

//ruta retornando vista
 Route::get('/', function () {
     return view('welcome');
 });

Route::get('/users/','Usercontroller@index');
//rutas con parametro numerico
Route::get('users/{id}','Usercontroller@show')->where('id','[0-9]+');
//ruta con mas de un parametro
Route::get('/users/{name}/{nickname}', 'Usercontroller@show2');
//ruta con mas de un parametro , parametro opcional 
Route::get('/users/{name}/{nickname?}','Usercontroller@show3');

