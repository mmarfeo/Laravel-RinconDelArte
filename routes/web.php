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

Route::get('/', function () {
    return view('welcome');
});
//2 paso se creo la ruta para que busque el archivo index en la carpeta views
Route::get ("/",function() {
  return view("index");
});

Route::get ("/index",function() {
  return view("index");
});

Route::get ("/registro",function() {
  return view("registro");
});

/*Route::post ("/registro",function() {
  return view("registro");
});*/

/*Route:: get("/login", function() {
  return view("login");
});*/

Route:: get("/login", "LoginController@login"
  //return view("login");
);

Route:: get("/faq", function(){
  return view("faq");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
