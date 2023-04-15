<?php session_start();
    include "../../modelo/usuario.model.php";
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $user = new User();

    if ($user->logear($usuario, $password)) {
        header("location:../../vistas/datos/menu.php");
    } else {
        echo "No se pudo logear";
    }

?>