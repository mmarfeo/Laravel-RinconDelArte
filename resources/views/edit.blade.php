@extends ("plantilla")

@section('titulo')
  Editar Perfil
@endsection
@section("edit")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edite su perfil</title>
</head>
<body>
    <h1>Edite su perfil {{Auth::user()->name}}</h1>

    <form action="" method="POST">
    @csrf
    Nombre:
        <input type="text" name="name" value="{{Auth::user()->name}}">
        <span style="color:red;">{{$errors->first('name')}}</span>
        <br>
        <buttom type="submit">Gauardar los cambios</buttom>
        

</body>
</html>

@endsection