<?php
// Obtener información de un usuario en base a su ID
function getUserById($conn, $numero_cuenta) {
    $query = "SELECT * FROM usuarios WHERE numero_cuenta  = '$numero_cuenta'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}


// Actualizar saldo de un usuario en base a su ID
function updateBalance($conn, $numero_cuenta, $balance) {
    $query = "UPDATE usuarios SET saldo = '$balance' WHERE numero_cuenta = '$numero_cuenta'";
    mysqli_query($conn, $query);
}
?>