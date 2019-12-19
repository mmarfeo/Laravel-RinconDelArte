@extends ("plantilla")

@section('titulo')
  Editar Perfil
@endsection
@section("edit")


    <h1>Edite su perfil {{Auth::user()->name}}</h1>

    <form action="/edit" method="POST">
    @csrf
    Nombre:
        <input type="text" name="name" value="{{Auth::user()->name}}">
        <span style="color:red;">{{$errors->first('name')}}</span>
        <br>
        <buttom type="submit">Gauardar los cambios</buttom>
</form>

@endsection