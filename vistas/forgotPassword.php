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
    <title>Registro de Usuario, Login y Cambio de Contraseña en PHP y MySQL</title>
    <link rel="stylesheet" href="./css/stylerespass.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
</head>
<body>
    <a ><h1>Restablecer Contraseña</h1></a>
	<div class="container">
		<h3>Introduce tu dirección de correo que usaste en el registro. Te enviaremos un correo con tu nombre de usuario y un enlace para que puedas restablecer tu contraseña.</h3>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="./userAccount.php" method="post">
				<input type="email" name="email" placeholder="Correo" required="">
				<div class="send-button">
					<input type="submit" name="forgotSubmit" value="Continuar">
				</div>
			</form>
		</div>
		<h5>Si necesitas más ayuda, contactate con el administrador.</h5>
	</div>
</body>
</html>