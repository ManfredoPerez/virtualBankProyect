<?php 
session_start();
   
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleLogin.css">
    <title>Banca Virtual</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
                <!--FORMULARIO PARA INICIO DE SESION-->
          <form action="../controladores/login/logear.php"  method="POST" class="sign-in-form"> <!--METODO POST-->
              <h2 class="title">Iniciar sesión</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Usuario" name="usuario" id="Usuario" />
              </div>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="password" placeholder="Contraseña" name="password" id="Password" />
              </div>
                <button type="submit" class="btn btn-sm btn-block btn-primary">Iniciar Sesion</button>
                <a href="forgotPassword.php" class="forgot-password-link" style="color: black;">¿Has olvidado tu contraseña?</a>
          </form>


                <!--FORMULARIO PARA REGISTRO DE CLIENTE-->
          <form method="post" class="sign-up-form" action="registro.php" >
                <h2 class="title">Regístrate</h2>
               
                <a class="d-block text-center mt-2 small" href="registro.php">Si aun no tienes una cuenta, solicita una!</a>
                <div id="formulariot">
               <h4>Tenga en cuenta que se le enviará un correo electronico con la verificación de su usuario y contraseña</h4>
              </div>
          </form>
        </div>
      </div>


                <!--SEGUNDA PAGINA -->
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
              <h2>BIENVENIDO</h2>
              <h3>¿Eres Nuevo?</h3>
              <p>Has clik al siguiente botón para crear tu cuenta si no tienes !</p>
                <button class="btn transparent" id="sign-up-btn">
                  Regístrate
                </button>
            </div>
                  <img src="img/digital.svg" class="image" alt="" />
          </div>
            <div class="panel right-panel">
              <div class="content">
                  <h3>¿Ya tienes una Cuenta?</h3>
                  <p> Inicie sesión </p>
                    <button class="btn transparent" id="sign-in-btn">
                      Iniciar Sesión
                    </button>
              </div>
                  <img src="img/bitcoin_re.svg" class="image" alt="" />
            </div>
      </div>
    </div>
          <script src="./js/scriptLogin.js"></script>
  </body>
</html>