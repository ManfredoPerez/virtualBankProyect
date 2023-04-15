<?php 
    include "../../modelo/usuario.model.php";

    $usuario    = $_POST['usuario'];
    $Apellido   = $_POST['Apellido'];
    $DPI        = $_POST['DPI'];
    $Email       = $_POST['Email'];
    $Direccion   = $_POST['Direccion'];
    $Ciudad      = $_POST['Ciudad'];
    $Telefono   = $_POST['Telefono'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user = new User();

    if ($user->registrar($usuario, $Apellido, $DPI, $Email, $Direccion, $Ciudad, $Telefono, $password)) {
        header("location: ../../index.php");
    } else {
        echo "No se pudo registrar";
    }

?>