<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/registro.css">
    <title>Registro de usuario</title>
  </head>
  <body>


      <!--FORMULARIO PARA REGISTRO DE CLIENTE-->

        <form method="post" class="sign-up-form" action="../controladores/registro/registrar.controller.php" >
          <div id="formulario"> 
            <h1> INGRESE SUS DATOS </h1> </div>
            
              <div id="tabla-formulario">
  
                <label for="nombre">Nombres</label>
                <input placeholder="Ingrese su nombre..." name="usuario" type="text"     id="tabla">
                
                <label for="apellido">Apellidos</label>
                <input placeholder="Ingrese su apellido..." name="Apellido" type="text" id="tabla">

                <label for="genero">DPI</label>
                <input placeholder="Escriba su numero de DPI" name="DPI" type="text" id="tabla">

                <label for="correo">Correo electronico (*) </label>
                <input placeholder="Escriba su e-mail" name="Email" type="text" id="tabla">

                <label for="fecha">Dirección</label>
                <input placeholder="Escriba su Dirección" name="Direccion" type="text" id="tabla">

                <label for="genero">Ciudad</label>
                <input placeholder="Escriba su Ciudad de residencia" name="Ciudad" type="text" id="tabla">

                <label for="genero">Telefono</label>
                <input placeholder="Escriba su número telefonico" name="Telefono" type="text" id="tabla">

                <label for="genero">Contraseña</label>
                <input placeholder="Escriba una contraseña" name="password" type="password" id="tabla">

              </div>
                  <button name="registro" type="submit" id="button"> ¡Registrarse! </button>
            </div>

            
        </form>

      
<script src="./js/scriptLogin.js"></script>
    
  </body>
</html>