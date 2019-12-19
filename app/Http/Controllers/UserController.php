<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            "name"=>"required",
            "email"=>"required|email|unique:users",
            "password"=>"required|same:confirm_password"
        ],[
            "name.required" =>"El nombre es obligatorio",
            "email.required" =>"El email es obligatorio",
            "password.required" =>"La password es obligatoria"
        ]);

        $nuevoUsuario = new User;
        $nuevoUsuario->name = $request->name;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->password = password_hash($request->password, PASSWORD_DEFAULT);

        $nuevoUsuario->save();
        
        return redirect ("/index");



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //$usuario = User::find($id);

        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request);
        $this->validate($request,[
            "name"=> "required|min:2|alpha"
        ],[
            "required" => "Coloque su nombre",
            "min"=> "Como minimo dos caracteres",
            "string"=> "Recuerde que tiene que ser un texto" 
        ]);

        $usuarioAEditar = User::find($id);
        $usuarioAEditar->name =$request->name;
        $usuarioAEditar-> save();

        return redirect('/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioAEliminar = User::find($id);
        $usuarioAEliminar->delete();

        return redirect('/index');

        //Necesito hacer la columna de activo en BD y editar esa columna entre 1 y 0
    }
}
