<?php
    include 'inicio.php';
?>

<?php
require_once "../../modelo/db.php";

// Obtener datos de la tabla transferencias
$sql = "SELECT remitente_id, destinatario_id, cantidad, fecha FROM transferencias";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Informe de transferencias</title>
	<style>
		table {
		  border-collapse: separate;
		  border-spacing: 0;
		  width: 100%;
		  margin: 50px auto;
		  max-width: 800px;
		  border-radius: 10px;
		  box-shadow: 0 2px 2px rgba(0,0,0,0.1), 0 0 10px rgba(0,0,0,0.05);
		}

		th, td {
		  padding: 12px;
		  text-align: left;
		  border: none;
		  border-radius: 5px;
		}

		th {
		  background-color: #4CAF50;
		  color: white;
		}

		tr:nth-child(even) {
		  background-color: #f2f2f2;
		}

		tr:hover {
		  transform: translateY(-2px);
		  box-shadow: 0 5px 15px rgba(0,0,0,0.3), 0 5px 10px rgba(0,0,0,0.2);
		}

		.header_title{
			width: 600px;
		  	height: 150px;
		  	margin: 0 auto;
		  	font-size: 20px;
		    display: grid;
		    align-content: center;
		    justify-content: center;
		    
		}

		.highlight{
		    position: relative;
		}

		.highlight:after{
		    display: block;
		    content: '';
		    position: absolute;
		    bottom: 0;
		    left: 0;
		    height: 100%;
		    width: 100%;
		    z-index: -1;
		    opacity: 0.7;
		    transform: scale(1.07, 1.05) skewX(-15deg);
		    background-image: #5ec576;
		    background-color: #5ec576;
		}




	</style>
</head>
<body>
	<div class="container">
		<div class="header_title">
			<h1 class="highlight">Informe de transferencias</h1>
		</div>
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

    <?php
        // Obtener registros de la tabla "usuarios"
        $sql = "SELECT id, numero_cuenta, nombre_completo, correo_electronico, saldo FROM usuarios";
        $result = $conn->query($sql);

        // Recorrer los registros de la tabla "usuarios"
        while ($row = $result->fetch_assoc()) {
            $usuario = new stdClass();
            $usuario->id = $row["id"];
            $usuario->numero_cuenta = $row["numero_cuenta"];
            $usuario->nombre_completo = $row["nombre_completo"];
            $usuario->correo_electronico = $row["correo_electronico"];
            $usuario->saldo = $row["saldo"];
            
            // Agregar objeto a un array de usuarios
            $usuarios[] = $usuario;
        }

        // Obtener registros de la tabla "transferencias"
        $sql = "SELECT remitente_id, destinatario_id, cantidad, fecha FROM transferencias";
        $result = $conn->query($sql);

        // Recorrer los registros de la tabla "transferencias"
        while ($row = $result->fetch_assoc()) {
            $transferencia = new stdClass();
            $transferencia->remitente_id = $row["remitente_id"];
            $transferencia->destinatario_id = $row["destinatario_id"];
            $transferencia->cantidad = $row["cantidad"];
            $transferencia->fecha = $row["fecha"];
            
            // Agregar objeto a un array de transferencias
            $transferencias[] = $transferencia;
        }


        // Inicializar array de eventos
        $eventos = array();

        // Recorrer los usuarios
        foreach ($usuarios as $usuario) {
        $saldo_anterior = $usuario->saldo;
        $saldo_actual = $usuario->saldo;
        $ganancias = 0;
        $perdidas = 0;
        
        // Recorrer las transferencias
        foreach ($transferencias as $transferencia) {
            if ($transferencia->remitente_id == $usuario->numero_cuenta) {
            $saldo_actual -= $transferencia->cantidad;
            $perdidas += $transferencia->cantidad;
            } else if ($transferencia->destinatario_id == $usuario->numero_cuenta) {
            $saldo_actual += $transferencia->cantidad;
            $ganancias += $transferencia->cantidad;
            }
        }
        
        // Crear objeto de evento
        $evento = new stdClass();
        $evento->usuario = $usuario->nombre_completo;
        $evento->saldo_anterior = $saldo_anterior;
        $evento->saldo_actual = $saldo_actual;
        $evento->ganancias = $ganancias;
        $evento->perdidas = $perdidas;
        
        // Agregar objeto a array de eventos
        $eventos[] = $evento;
        }
    ?>
    <style >
        table {
        border-collapse: separate;
        border-spacing: 0;
        width: 80%;
        margin: 50 auto;
        font-family: Arial, Helvetica, sans-serif;
        color: #333;
        border: 1px solid #ccc;
        margin-top: 30px;
        margin-bottom: 30px;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1);
        }

        th {
        background-color: #008080;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        border: 1px solid #008080;
        padding: 12px 15px;
        position: relative;
        }

        th::before {
        content: "";
        position: absolute;
        bottom: -1px;
        left: -1px;
        right: -1px;
        height: 10px;
        border: 1px solid #ccc;
        border-top: none;
        border-right: none;
        transform: skewX(-45deg);
        }

        td {
        border: 1px solid #ccc;
        padding: 12px 15px;
        position: relative;
        }

        td::before {
        content: "";
        position: absolute;
        bottom: -1px;
        left: -1px;
        right: -1px;
        height: 10px;
        border: 1px solid #ccc;
        border-top: none;
        border-right: none;
        transform: skewX(-45deg);
        }

        tr:nth-child(even) {
        background-color: #f2f2f2;
        }

        tr:hover {
        background-color: #ddd;
        }

        caption {
        font-weight: bold;
        margin-bottom: 10px;
        font-size: 1.2rem;
        }

    </style>

        <div class="header_title">
			<h1 class="highlight">Estado de Cuentas</h1>
		</div>
    <?php
    // Mostrar la línea de tiempo en una tabla HTML
    echo "<table>";
    echo "<tr><th>Usuario</th><th>Saldo anterior</th><th>Ganancias</th><th>Pérdidas</th><th>Saldo actual</th></tr>";
    foreach ($eventos as $evento) {
        echo "<tr>";
        echo "<td>".$evento->usuario."</td>";
        echo "<td>".$evento->saldo_anterior."</td>";
        echo "<td>".$evento->ganancias."</td>";
        echo "<td>".$evento->perdidas."</td>";
        echo "<td>".$evento->saldo_actual."</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>


</body>
</html>




 