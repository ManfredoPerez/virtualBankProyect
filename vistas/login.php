<?php 
session_start();
   

include '../modelo/bd.php';
include '../modelo/usuario.model.php';
include '../controladores/usuario.controller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
            <form action=""  method="POST" class="sign-in-form"> <!--METODO POST-->
              <h2 class="title">Iniciar sesión</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Usuario" name="username" id="Usuario" />
              </div>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Contraseña" name="password" id="Usuario" />
              </div>
              <button type="submit" name="submit" class="btn btn-sm btn-block btn-primary">Iniciar Sesion</button>
              
              
              
            </form>
            <form action="#" class="sign-up-form">
              <h2 class="title">Regístrate</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Numero de cuenta" />
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="DPI" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Contraseña" />
              </div>
              <input type="submit" class="btn" value="Regístrate" />
             
            </form>
          </div>
        </div>
    
        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h2>BIENVENIDO</h2>
              <h3>¿Eres Nuevo?</h3>
              <p>
                Has clik al siguiente botón para crear tu cuenta si no tienes !
              </p>
              <button class="btn transparent" id="sign-up-btn">
                Regístrate
              </button>
            </div>
            <img src="img/digital.svg" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3>¿Ya tienes una Cuenta?</h3>
              <p>
              Inicie sesión
              </p>
              <button class="btn transparent" id="sign-in-btn">
                Iniciar Sesión
              </button>
            </div>
            
            <img src="img/bitcoin_re.svg" class="image" alt="" />
          </div>
        </div>
      </div>

      <script src="js/scriptLogin.js"></script>
</body>
</html>