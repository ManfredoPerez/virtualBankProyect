<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Banca Virtual</title>
    <link rel="stylesheet" href="./css/stylerespass.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
</head>
<body>
    <h1>Restableciendo Contraseña</h1>
	<div class="container">
		<h2>Resetea la Contraseña de tu Cuenta escribe tu correo</h2>
        <div class="regisFrm">
			<form action="" method="post">
				<input type="email" name="email" placeholder="correo" required="">
				<h3>Escribe tu nueva contraseña</h3>
				<input type="password" name="password" placeholder="Contraseña" required="">
				<input type="password" name="confirm_password" placeholder="Confirma tu Contraseña" required="">
				<div class="send-button">
					<input type="submit" name="resetSubmit" value="Resetea Contraseña">
				</div>
			</form>
		</div>
	</div>
<?php
    if (isset($_POST['resetSubmit'])) {
        // Establecer la conexión a la base de datos (rellena los valores correspondientes)
        $dbHost = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "bancavirtual";
        $userTbl = "infocliente";
    
        // Conectar a la base de datos
        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die("Failed to connect with MySQL: " . $conn->connect_error);
        }
    
        // Obtener el correo ingresado                  
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
    
        if ($password != $confirmPassword) {
            echo "Las contraseñas no coinciden";
        } else {
            // Verificar si el correo existe en la tabla "infocliente"
            $sql = "SELECT Email FROM infocliente WHERE Email = '$email'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                // El correo existe en la tabla, actualiza la contraseña
                $sqlUpdate = "UPDATE infocliente SET password = '$password' WHERE Email = '$email'";
                $update = $conn->query($sqlUpdate);
                if ($update) {
                    echo "Contraseña actualizada exitosamente";
                    header("Location: login.php");
                    // Redirigir a la página de éxito o a la página de inicio de sesión
                    // header("Location: reset_success.php");
                    // exit();
                } else {
                    echo "Error al actualizar la contraseña";
                }
            } else {
                echo "Correo no encontrado en la base de datos";
            }
        }
    
        // Cerrar la conexión a la base de datos
        mysqli_close($conn);
    }
    
    ?>

</body>
</html>