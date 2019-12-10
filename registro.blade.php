@extends ("plantilla")
@section('titulo')
  Registrarse
@endsection
@section("registro")

<form method="post" action="/register" enctype="multipart/form-data" class="row col-12">
                        @csrf
                        <!-- Nombre -->
                        <div class="input-container col-4 offset-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" value="">
                        </div>
                        <div class="form-error error">
                            <span></span>
                        </div>

                        <!-- Apellido  -->
                        <div class="input-container col-4 offset-4">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" value="">
                        </div>
                        <div class="form-error error">
                            <span></span>
                        </div>

                        <!-- Username -->
                        <div class="input-container col-4 offset-4">
                            <label for="username">Username</label>
                            <input type="text" name="username" value="">
                        </div>
                        <div class="form-error error">
                            <span></span>
                        </div>

                        <!-- Email -->
                        <div class="input-container col-4 offset-4">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="">
                        </div>
                        <div class="form-error error">
                            <span></span>
                        </div>

                        <!-- Fecha de nacimiento -->
                        <div class="input-container col-4 offset-4">
                            <label for="fecha-nac">Fecha de nacimiento</label>
                            <input type="date" name="fecha-nac" value="">
                        </div>
                        <div class="form-error error">
                            <span></span>
                        </div>

                        <!-- Género -->
                        <div class="input-container col-4 offset-4">
                            <label for="genero">Género</label>
                        </div>
                        <div class="col-4 offset-4">
                            <input type="radio" name="genero" value="hombre" > Hombre
                            <input type="radio" name="genero" value="mujer" > Mujer
                        </div>
                        <div class="error">
                            <span></span>
                        </div>

                        <!-- Foto de perfil -->
                        <div class="input-container col-4 offset-4">
                            <label for="foto">Foto de perfil</label>
                            <input type="file" name="foto-perfil" id="foto-perfil">
                        </div>
                        <div class="form-error error">
                            <span></span>
                        </div>

                        <!-- Contraseña -->
                        <div class="input-container col-4 offset-4">
                            <label for="clave">Contraseña</label>
                            <input type="password" name="clave" id="clave" value="">
                        </div>
                        <div class="form-error error">
                            <span></span>
                        </div>

                        <!-- Confirmar contraseña -->
                        <div class="input-container col-4 offset-4">
                            <label for="conf-clave">Confirmar contraseña</label>
                            <input type="password" name="conf-clave" id="conf-clave" value="">
                        </div>
                        <div class="form-error error">
                            <span></span>
                        </div>

                        <!-- Recordar usuario -->
                        <div class="col-4 offset-4">
                            <input type="checkbox" value="recordarme" name="recordarme" id=recordarme >
                            <label for="recordarme">Recordarme</label>
                        </div>

                        <!-- Enviar formulario -->
                        <div class="col-4 offset-4 row">
                            <input type="submit" value="Crear cuenta" class="boton col-12">
                        </div>

                    </form>
@endsection
