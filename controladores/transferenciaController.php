<?php
// Cargar archivos necesarios
require_once "../modelo/db.php";
require_once "../modelo/user.php";
require_once "../modelo/transfer.php";

// Validar información ingresada por el usuario
$from_user = filter_var($_POST["from_user"], FILTER_SANITIZE_NUMBER_INT);
$to_user = filter_var($_POST["to_user"], FILTER_SANITIZE_NUMBER_INT);
$amount = filter_var($_POST["amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

// Obtener información de los usuarios
$from_user_info = getUserById($conn, $from_user);
$to_user_info = getUserById($conn, $to_user);

// Verificar si existen los usuarios
if (!$from_user_info) {
    die("El usuario remitente no existe.");
}

if (!$to_user_info) {
    die("El usuario destinatario no existe.");
}

// Verificar si el remitente tiene suficiente saldo
if ($from_user_info["saldo"] < $amount) {
    die("El usuario remitente no tiene suficiente saldo.");
}

// Realizar transferencia
$new_balance_from = $from_user_info["saldo"] - $amount;
$new_balance_to = $to_user_info["saldo"] + $amount;

mysqli_begin_transaction($conn);
updateBalance($conn, $from_user, $new_balance_from);
updateBalance($conn, $to_user, $new_balance_to);

createTransfer($conn, $from_user, $to_user, $amount);
mysqli_commit($conn);

// Redireccionar a página de éxito
header("Location: ../vistas/datos/transferenciaExitosa.php");
?>