<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource("professors","ProfessorController");
Route::resource("alunos","AlunoController");