<?php

//ruta retornando vista
 Route::get('/', function () {
     return view('home');
 });

Route::get('/users/','Usercontroller@index')
->name('users.index');
Route::get('/users/new','Usercontroller@create')
->name('users.create');
Route::post('/users/','Usercontroller@store')
->name('users');
Route::delete('users/{item}','UserController@delete')
->where('id','[0-9]+')
->name('users.delete');
Route::get('/users/{item}','Usercontroller@show')
->where('id','[0-9]+')
->name('users.show');
Route::get('/users/edit/{item}','Usercontroller@edit')
->where('id','[0-9]+')
->name('users.edit');
Route::put('/users/{user}', 'UserController@update');
//ruta con mas de un parametro
Route::get('/users/{name}/{nickname}', 'Usercontroller@show2');
//ruta con mas de un parametro , parametro opcional 
Route::get('/users/{name}/{nickname?}','Usercontroller@show3');

Route::get('/usuarios/','UserController@Listado');
Route::get('/usuarios/profesion/{id}','UserController@Listado_Profesion2')->where('id','[0-9]+');
Route::get('/professions/','ProfessionController@index');
