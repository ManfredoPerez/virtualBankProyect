<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_cuenta = $_POST["numero_cuenta"];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bancavirtual";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Comprobar si la conexión es exitosa
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Realizar la consulta
    $result = $conn->query("SELECT fecha, cantidad FROM transferencias WHERE remitente_id = $numero_cuenta OR destinatario_id = $numero_cuenta ORDER BY fecha ASC;");

    // Crear una matriz para almacenar los datos
    $datos = array();

    // Agregar cada fila de resultados a la matriz de datos
    while ($fila = $result->fetch_assoc()) {
        $datos[] = array(
            'fecha' => $fila['fecha'],
            'cantidad' => $fila['cantidad']
        );
    }

    // Consulta para obtener la información del usuario
    $sql = "SELECT nombre_completo, saldo FROM usuarios WHERE numero_cuenta = '$numero_cuenta'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar el nombre y el estado de cuenta del usuario
        $row = $result->fetch_assoc();
        $nombre = $row["nombre_completo"];
        $saldo = $row["saldo"];
        echo "<p> <b>Nombre del usuario: </b>$nombre</p>";
        echo "<p><b>Saldo disponible:</b> $saldo</p>";
    } else {
        echo "<p>No se encontró ningún usuario con ese número de cuenta.</p>";
    }

    $conn->close();
}
?>