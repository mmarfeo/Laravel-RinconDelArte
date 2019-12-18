<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = product::all();

      return view('index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request,[
         "name" => "required|string|min:3",
         "price" => "required|numeric",
         "desc" => "required|max:280",
         "img" => "required|mimes:jpeg,jpg,png,gif"
     ],[
         "required" => "El campo es obligatorio.",
         "numeric" => "Debe ingresar números.",
         "max" => "La imagen no puede superar los 10 MB.",
         "mimes" => "El formato de la imagen debe ser jpeg,jpg,png,gif."
     ]);

     $rutaimg = $request->file("img")->store("products");
     $nuevoProducto = new product;
     $nuevoProducto->name = $request->name;
     $nuevoProducto->price = $request->price;
     $nuevoProducto->desc = $request->desc;
     $nuevoProducto->img= $rutaimg;
     //$request->img;
     $nuevoProducto->save();

     return redirect("/index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
      $products = Product::find($id);
       return view('products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
      $this->validate($request,[
          "name" => "required|string|min:3",
          "price" => "required|numeric",
          "desc" => "required|max:280",
          "img" => "required|mimes:jpeg,jpg,png,gif|max:10000",
      ],[
          "required" => "El campo es obligatorio.",
          "price" => "Debe ingresar números.",
          "max" => "La imagen no puede superar los 10 MB.",
          "mines" => "El formato de la imagen debe ser jpeg,jpg,png,gif."
      ]);

      $nuevoProducto = new Product;
      $nuevoProducto->name = $request->name;
      $nuevoProducto->price = $request->price;
      $nuevoProducto->desc = $request->desc;
      $nuevoProducto->img = $request->img;

      $nuevoProducto->save();

      return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
