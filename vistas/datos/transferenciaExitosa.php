<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancavirtual";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos de la tabla transferencias
$sql = "SELECT remitente_id, destinatario_id, cantidad, fecha FROM transferencias";
$result = $conn->query($sql);

// Cerrar conexión
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Transferencia Bancaria</title>
    <link rel="stylesheet"  href="../css/estadotransferencia.css">

    <style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		h1 {
			margin-top: 50px;
			margin-bottom: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
<div class="container">
    <h1>Transferencia Exitosa</h1>
    <p>La transferencia ha sido realizada con éxito.</p>
    <a href="transferencia.php">Realizar otra transferencia</a>
</div>

	<div class="container">
		<h1>Informe de transferencias</h1>
		<table>
			<thead>
				<tr>
					<th>Remitente</th>
					<th>Destinatario</th>
					<th>Cantidad</th>
					<th>Fecha</th>
				</tr>
			</thead>
			<tbody>
				<!-- Aquí se insertarán los datos dinámicamente con PHP -->
				<tbody>
					<?php
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo "<tr><td>" . $row["remitente_id"] . "</td><td>" . $row["destinatario_id"] . "</td><td>" . $row["cantidad"] . "</td><td>" . $row["fecha"] . "</td></tr>";
						}
					} else {
						echo "<tr><td colspan='4'>No hay datos disponibles</td></tr>";
					}
					?>
				</tbody>

			</tbody>
		</table>
	</div>

</body>
</html>