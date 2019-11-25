@extends ("plantilla")
@section('titulo')
  Ingresar
@endsection
@section ("login")

  <!-- Contenido principal de la página -->
      <main class="row">
        <div class="row col-12 borde">

          <!-- Título de la página -->
          <h2 class="col-12">¡Bienvenido!</h2>

          <!-- Formulario de login -->
          <form action="/TrabajoDH/tp-version-db/login.php" method="post" class="row col-12">
            @csrf
            <!-- Username -->
            <div class="input-container col-4 offset-4">
              <label for="userame">Username</label>
              <input type="text" name="username" id="username">
            </div>

            <!-- Contraseña -->
            <div class="input-container col-4 offset-4">
              <label for="clave">Contraseña</label>
              <input type="password" name="clave" id="clave">
            </div>

            <!-- Recordar usuario -->
            <div class="col-4 offset-4">
              <input type="checkbox" value="recordarme" name="recordarme" id="recordarme" >
              <label for="recordarme">Recordarme</label>
            </div>

            <!-- Error de login -->
            <div class="preg-form col-12 error">
                          </div>

            <!-- Enviar formulario -->
            <div class="col-4 offset-4 row">
              <input type="submit" value="Ingresar" class="boton col-12">
            </div>

          </form>

          <!-- Link para restablecer contraseña -->
          <a href="restablecer-clave.php" class="preg-form col-12">¿Olvidaste tu contraseña?</a>

          <!-- Link a página de registro -->
          <a href="registro.php" class="preg-form col-12">¿No tenés cuenta? ¡Registrate!</a>

        </div>
      </main>
@endsection
