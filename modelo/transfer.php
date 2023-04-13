<?php
// Insertar una nueva transferencia en la tabla de transferencias
function createTransfer($conn, $from_user, $to_user, $amount) {
    $date = date("Y-m-d H:i:s");
    $query = "INSERT INTO transferencias (remitente_id, destinatario_id, cantidad, fecha) VALUES ('$from_user', '$to_user', '$amount', '$date')";
    
    mysqli_query($conn, $query);
}

// Obtener una lista de todas las transferencias
function getAllTransfers($conn) {
    $query = "SELECT * FROM transferencias";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>