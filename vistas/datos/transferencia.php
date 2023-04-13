<?php
    include 'inicio.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transferencia Bancaria</title>
    <link rel="stylesheet" type="text/css" href="../css/transferencia.css">
</head>
<body>

    <div class="header_title">
        <h1 class="highlight">Transferencia Bancaria</h1>
    </div>

    <div class="container">
        <form method="post" action="../../controladores/transferenciaController.php">
        <div class="form-group">
            <label for="from_user">Cuenta de Remitente:</label>
            <input type="text" name="from_user" id="from_user" required>
        </div>
        <div class="form-group">
            <label for="to_user">Cuenta de Destinatario:</label>
            <input type="text" name="to_user" id="to_user" required>
        </div>
        <div class="form-group">
            <label for="amount">Monto a Transferir:</label>
            <div class="input-group">
            <span class="input-group-addon">Q</span>
            <input type="number" name="amount" id="amount" min="0" required>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Transferir</button>
            <button type="reset" class="btn btn-secondary">Borrar</button>
        </div>
        </form>
    </div>

</body>
</html>