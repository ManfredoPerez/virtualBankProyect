

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link para la grafica -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Link del css -->
    <link rel="stylesheet" href="../css/irCuenta.css">
    <title>Estado de Cuenta Rapida</title>
</head>
<body>
    
    <div class="header">
        <h1>Informe Estado de Cuenta Rapida</h1>
        <a href="../../index.php" class="boton">Salir</a>
    </div>

    <div class="header_title">
        <h1 class="highlight">Búsqueda de usuario</h1>
    </div>


    <form method="post">
        <label for="numero_cuenta">Número de cuenta:</label>
        <input type="text" placeholder="Ingrese Cuenta" name="numero_cuenta" id="numero_cuenta" required>
        <input type="submit" value="Buscar">
    </form>

    <?php 

        include '../../modelo/irCuenta.model.php';

    ?>


    <br>
    <div class="header_title">
        <h1 class="highlight">Grafica de las Tranferencias Realizadas</h1>
    </div>


    <canvas id="mi-grafica"></canvas>

    <script>
    var ctx = document.getElementById('mi-grafica').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: <?php echo json_encode(array_column($datos, 'fecha')); ?>,
        datasets: [{
            label: 'Transferencias',
            data: <?php echo json_encode(array_column($datos, 'cantidad')); ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            yAxes: [{
            ticks: {
                beginAtZero: true,
                fontColor: '#555',
                fontSize: 12
            },
            gridLines: {
                color: 'rgba(0, 0, 0, 0.1)',
                lineWidth: 1
            }
            }],
            xAxes: [{
            ticks: {
                fontColor: '#555',
                fontSize: 12
            },
            gridLines: {
                display: false
            }
            }]
        },
        animation: {
            duration: 2000,
            easing: 'easeInOutQuad'
        },
        legend: {
            display: true,
            labels: {
            fontColor: '#555',
            fontSize: 12
            }
        }
        }
    });
    </script>



</body>
</html>