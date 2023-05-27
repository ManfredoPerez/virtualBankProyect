<?php 
session_start();
if(isset($_POST['cerrarSesion'])){
    unset($_SESSION['usuario']);
    header('Location: ../../index.php');
}
?>

<?php if(isset($_SESSION['usuario'])) { ?>
 
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/styleprincipal.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   
    <style>
        /* Estilos generales */
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
}

.title {
  font-size: 36px;
  color: #333;
  margin-bottom: 20px;
}

.welcome {
  font-size: 24px;
  color: #666;
  margin-bottom: 30px;
}

.dashboard {
  display: flex;
  justify-content: space-between;
  margin-bottom: 30px;
}

.account-summary,
.actions {
  flex-basis: 48%;
}

.account-summary h3,
.actions h3 {
  font-size: 24px;
  color: #333;
  margin-bottom: 10px;
  text-transform: uppercase;
}

.account-summary ul,
.actions ul {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: left;
}

.account-summary li {
  margin-bottom: 15px;
}

.account-summary a {
  display: block;
  font-size: 18px;
  color: #333;
  text-decoration: none;
  margin-bottom: 5px;
}

.account-summary a:hover {
  text-decoration: underline;
}

.account-summary p {
  font-size: 14px;
  color: #666;
}

.logout {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 4px;
  font-size: 16px;
  margin-top: 30px;
}

.summary {
  font-size: 16px;
  color: #666;
  margin-top: 30px;
  line-height: 1.5;
}

/* Estilos adicionales para mejorar la apariencia */
.container {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  background-color: #fff;
}

.dashboard {
  border-top: 1px solid #ccc;
  padding-top: 20px;
}

.account-summary,
.actions {
  padding: 20px;
  border-right: 1px solid #ccc;
}

.actions {
  border-right: none;
}

.account-summary ul,
.actions ul {
  margin-left: 20px;
}

.logout {
  display: inline-block;
  padding: 10px 30px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 30px;
  font-size: 16px;
  margin-top: 30px;
  transition: background-color 0.3s;
}

.logout:hover {
  background-color: #45a049;
}



    </style>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">Banca</span>
                    <span class="profession">Virtual</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">



                <ul class="menu-links"></ul>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="transferencia.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Transacciones</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notificaciones</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Anasis</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Cuenta</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="historial.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Historial</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../../index.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Salir</span>
                    </a>
                </li>

               
                
            </div>
        </div>

    </nav>

    <!-- <section class="home">
        <div class="text">Principal Banca Virtual</div>
        <!-- <div class="container">
        <div class="row mt-3 justify-content-md-center">
            <div class="col-md-6">
                <h1>Hola, bienvenido <?php echo '<strong>'.$_SESSION['usuario'].'</strong>'; ?></h1>
            </div>
            </div>
            
                <div class="row mt-3 justify-content-md-center">
                    <form action="" method="POST">
                    <button type="submit" class="btn btn-primary btn-block" name="cerrarSesion"> Cerrar Sesion </button>
                    </form>
                </div> -->
    <!-- </div> -->

    <div class="container">
    <h1 class="title">Banca Virtual</h1>
    <h1 >¡Hola, Bienvenido(a) <?php echo '<strong>'.$_SESSION['usuario'].'</strong>'; ?>!</h1>

    <p class="summary">Bienvenido(a) a Banca Virtual. Aquí puedes administrar tus cuentas, realizar transferencias, pagar facturas y mantener un registro de tus transacciones. ¡Disfruta de una experiencia bancaria segura y conveniente!</p>
    <div class="dashboard">
      <div class="account-summary">
        
      
      
        <h3>Acciones</h3>
        <ul>
          <li>
            <a href="transferencia.php">Realizar Transferencia</a>
            <p>Transfiere dinero entre tus cuentas o hacia cuentas de terceros de forma rápida y segura.</p>
          </li>
          <li>
            <a href="#">Pagar Facturas</a>
            <p>Paga tus facturas de servicios públicos, tarjetas de crédito y otros pagos desde la comodidad de tu hogar.</p>
          </li>
          <li>
            <a href="historial.php">Historial de Transacciones</a>
            <p>Revisa el historial completo de tus transacciones para llevar un control detallado de tus movimientos financieros.</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="row mt-3 justify-content-md-center">
        <form action="" method="POST">
        <button class="logout" type="submit" class="btn btn-primary btn-block" name="cerrarSesion"> Cerrar Sesion </button>
         </form>
    </div>
    <!-- <a href="logout.html" class="logout">Cerrar Sesión</a> -->
    
  </div>


  </div>
    </section>
 
    <script src="../js/principal.js"></script>
   

<?php }else{ 
    header('Location: ../../index.php');
 } ?>