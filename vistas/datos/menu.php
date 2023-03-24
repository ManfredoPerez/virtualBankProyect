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

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Operaciones</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
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
                        <a href="#">
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

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Principal Banca Virtual</div>
        <div class="container">
        <div class="row mt-3 justify-content-md-center">
            <div class="col-md-6">
                <h1>Hola, bienvenido <?php echo '<strong>'.$_SESSION['usuario'].'</strong>'; ?></h1>
            </div>
            </div>
            
                <div class="row mt-3 justify-content-md-center">
                    <form action="" method="POST">
                    <button type="submit" class="btn btn-primary btn-block" name="cerrarSesion"> Cerrar Sesion </button>
                    </form>
                </div>
    </div>
    </section>
 
    <script src="../js/principal.js"></script>
   

<?php }else{ 
    header('Location: ../../index.php');
 } ?>