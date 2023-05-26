<?php
session_start();
$sessData = !empty($_SESSION['sessData']) ? $_SESSION['sessData'] : '';
if (!empty($sessData['status']['msg'])) {
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
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" type="text/css" media="all">
</head>
<body>
    <a><h1>Restablecer Contraseña</h1></a>
    <div class="container">
        <h3>Introduce tu dirección de correo que usaste en el registro. Te enviaremos un correo con tu nombre de usuario y un enlace para que puedas restablecer tu contraseña.</h3>
        <div class="regisFrm">
            <form action="" method="post" name="forgotForm">
                <input type="email" name="email" placeholder="Correo" required="">
                <div class="send-button">
                    <input type="submit" name="forgotSubmit" value="Continuar">
                </div>
            </form>
        </div>
        <h5>Si necesitas más ayuda, contáctate con el administrador.</h5>
    </div>
    <?php
    include 'user.php';
    $user = new User();
    if (isset($_POST['forgotSubmit'])) {
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
        // Verificar si el correo existe en la tabla "infocliente"
        $sql = "SELECT Email, Nombre FROM infocliente WHERE Email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
           
            $nom = $row['Nombre'];
            $to = $row['Email'];
            // El correo existe en la tabla
            // Puedes realizar las acciones correspondientes aquí, como enviar el correo de restablecimiento de contraseña
            $resetPassLink = 'http://localhost:82/virtualBankProyect/vistas/resetPassword.php?fp_code=';

            // Enviar correo de restablecimiento de contraseña
            $subject = "Solicitud de Cambio de Contraseña";
            $mailContent = 'Estimad@ '.$nom.', 
            <br/><br/>Recientemente se envió una solicitud para restablecer una contraseña para su cuenta. Si esto fue un error, simplemente ignore este correo electrónico y no pasará nada.
            <br/>Para restablecer su contraseña, visite el siguiente enlace: <a href="'.$resetPassLink.'">'.$resetPassLink.'</a>
            <br/><br/>Saludos,
            <br/>
            <br/>Edvin 
            <br/>';                
                
            // Establecer encabezados para enviar el correo HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // Establecer encabezado adicional
            $headers .= 'From: banckavirtual.com' . "\r\n";
            // Enviar correo
            
            if (mail($to, $subject, $mailContent, $headers)) {
                echo "Correo enviado satisfactoriamente";
            } else {
                echo "Error al enviar el correo";
            }
        } else {
            // El correo no existe en la tabla
            echo "Correo no encontrado en la base de datos";
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conn);
    }
    ?>  
</body>
</html>
