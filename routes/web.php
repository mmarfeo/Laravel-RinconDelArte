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

// Route::get('/', function () {
//     return view('welcome');
// });
//2 paso se creo la ruta para que busque el archivo index en la carpeta views
use App\product;
Route::get ("/",function() {
  $products = product::all();
  return view("index",compact('products'));
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

Route::get('/index','productController@index');

Route::get("/admin", function(){
  return view("admin");
});

Route::post("/cart", 'productController@store');

//Es muy importante el orden de las rutas, ya que puede entrar primero a una y luego a otra
//En este caso le ponemos view porque queremos que sea una vista, y ese es el segundo parametro
// el nombre de la vista "cart", el primero es la ruta "/cart", el middleware("auth"), es para
// que solo ingresen quienes estan logueados.
Route::view("/cart", "cart")->name ("cart")->middleware("auth");


Route::post('/cart/{productId}', 'CartController@addProduct')->name('addProductToCart');
