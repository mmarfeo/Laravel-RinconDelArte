<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate</title>
</head>
<body>
<h1>Complete el formulario de registro</h1>                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    <form action="" method="POST">
    @csrf
        Nombre:
        <input type="text" name="name" value="{{old('name')}}">
        <span style="color:red;">{{$errors->first('name')}}</span>
        <br>
        Email:
        <input type="text" name="email" value="{{old('email')}}">
        <span style="color:red;">{{$errors->first('email')}}</span>
        <br>
        Contraseña:
        <input type="text" name="password">
        <span style="color:red;">{{$errors->first('password')}}</span>
        <br>
        Confirmar Contraseña:
        <input type="text" name="confirm_password">
        <br>
        <buttom type="submit">Registrarme</buttom>

    </form>
</body>
</html>