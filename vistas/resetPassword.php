<?php
session_start();
$sessData = !empty($_SESSION['sessData']) ? $_SESSION['sessData'] : '';
if (!empty($sessData['status']['msg'])) {
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['resetSubmit'])) {
    // Verificar si se han enviado las contraseñas
    if (!empty($_POST['actual']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
        $actualPassword = $_POST['actual'];
        $newPassword = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

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

        // Obtener el correo de la sesión
        $email = $_SESSION['email'];

        // Buscar la contraseña actual en la base de datos
        $sql = "SELECT password FROM infocliente WHERE Email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

            // Verificar si la contraseña actual coincide
            if (password_verify($actualPassword, $hashedPassword)) {
                // Verificar si las nuevas contraseñas coinciden
                if ($newPassword === $confirmPassword) {
                    // Actualizar la contraseña en la tabla "infocliente"
                    $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $updateSql = "UPDATE infocliente SET password = '$newHashedPassword' WHERE Email = '$email'";
                    if ($conn->query($updateSql) === true) {
                        $statusMsg = "Contraseña actualizada correctamente";
                        $statusMsgType = "success";
                    } else {
                        $statusMsg = "Error al actualizar la contraseña";
                        $statusMsgType = "error";
                    }
                } else {
                    $statusMsg = "Las nuevas contraseñas no coinciden";
                    $statusMsgType = "error";
                }
            } else {
                $statusMsg = "La contraseña actual es incorrecta";
                $statusMsgType = "error";
            }
        } else {
            $statusMsg = "Correo no encontrado en la base de datos";
            $statusMsgType = "error";
        }

        // Cerrar la conexión a la base de datos
        $conn->close();

        // Guardar el mensaje de estado en la sesión
        $_SESSION['sessData']['status']['msg'] = $statusMsg;
        $_SESSION['sessData']['status']['type'] = $statusMsgType;
        header("Location: resetPassword.php");
        exit();
    } else {
        $statusMsg = "Por favor, completa todos los campos";
        $statusMsgType = "error";
    }
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
    <h1>Restableciendo Contraseña</h1>
    <div class="container">
        <h2>Resetea la Contraseña de tu Cuenta</h2>
        <div class="regisFrm">
            <?php
            if (!empty($statusMsg) && !empty($statusMsgType)) {
                echo '<div class="alert-' . $statusMsgType . '">' . $statusMsg . '</div>';
            }
            ?>
            <form action="" method="post">
                <input type="password" name="actual" placeholder="Contraseña actual" required="">
                <h3>Escribe tu nueva contraseña</h3>
                <input type="password" name="password" placeholder="Contraseña" required="">
                <input type="password" name="confirm_password" placeholder="Confirma tu Contraseña" required="">
                <div class="send-button">
                    <input type="submit" name="resetSubmit" value="Resetea Contraseña">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
