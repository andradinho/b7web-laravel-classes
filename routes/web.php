<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController');
Route::view('/teste', 'teste');

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@autenticate');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('todo', 'TodoController');

Route::prefix('/tarefas')->group(function(){

    Route::get('/', 'TarefasController@list')->name('tarefas.list'); // Lista de tarefas

    Route::get('add', 'TarefasController@add')->name('tarefas.add'); // Page de adição de tarefas
    Route::post('add', 'TarefasController@addAction'); // Ação de adição de nova tarefa

    Route::get('edit/{id}', 'TarefasController@edit')->name('tarefas.edit'); // Tela de edição
    Route::post('edit/{id}', 'TarefasController@editAction'); // Ação de edição

    Route::get('delete/{id}', 'TarefasController@del')->name('tarefas.del'); // Ação de deletar

    Route::get('marmar/{id}', 'TarefasController@done')->name('tarefas.done'); // Marcar como resolvido/não.
});

Route::prefix('/config')->group(function(){
    
    Route::get('/','Admin\ConfigController@index')->name('config.index');
    Route::post('/','Admin\ConfigController@index');

    Route::get('info', 'Admin\ConfigController@info');

    Route::get('permissoes', 'Admin\ConfigController@permissoes');
});

Route::fallback(function(){
    return view('404');
});