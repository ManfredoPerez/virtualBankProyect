<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banca virtual</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="./vistas/css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./vistas/css/style3.css">
    <link rel="stylesheet" href="./vistas/css/style.css">

    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap">

</head>

<body>

    <header class="header">
        <nav class="nav">
            <!-- <img src="img/logo1.png" alt="Logo" class="nav_logo" id="logo" data-version-number-pro-Der="2.0"> -->
            <h2 class="logo1">Virtual <span class="spanlogo">Bank</span></h2>
            <ul class="nav_links">
                <li class="nav_item">
                    <a href="#section--1" class="nav_link">Características</a>
                </li>
                <li class="nav_item">
                    <a href="#section--2" class="nav_link">Operaciones</a>
                </li>
                <li class="nav_item">
                    <a href="#section--3" class="nav_link">Testimonios</a>
                </li>

                <li class="nav_item">
                    <a href="./vistas/datos/irCuenta.php" class="nav_link nav_link--special">Ir a la cuenta</a>
                </li>
                <li class="nav_itme">
                    <a href="#" class="nav_link nav_link--btn btn--show-modal">Login/Abrir Cuenta</a>
                </li>
            </ul>
        </nav>

        <div class="header_title">
            <h1>
                <br>
                Hacer una
                <!-- Green highlighy effects -->
                <span class="highlight">Transacción</span>
                <br>
                <span class="highlight">Fácilmente</span>
                desde la comodidad del hogar
            </h1>
            <h4>Una experiencia bancaria más sencilla para su vida diaria.</h4>
            <button class="btn--text btn--scroll-to">Aprende más &DownArrow;</button>
            <br>
            <img src="./vistas/img/transaccion.jpg" alt="Minimalist bank-items" class="header_img">
        </div>
    </header>


    <section class="section" id="section--1">
        <div class="section_title">
            <h2 class="section_description">Facturas</h2>
            <h3 class="section_header">
                Todo lo que necesitas en un banco moderno y más.
            </h3>
        </div>

        <div class="features">
            <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2021/05/lampara-led-escritorio-xiaomi-2325135.jpg?tf=3840x"
                data-src="img/digital.jpg" alt="Computer" class="features_img lazy-img" />
            <div class="features_feature">
                <div class="features_icon">
                    <svg>
                        <img src="./vistas/img/monitor.png" alt="">
                    </svg>
                </div>
                <h5 class="features_header">Banco 100% digital</h5>
                <p>El servicio bancario se brinda a través de Internet. Asimismo,
                    el cliente debe generar su Contraseña en Internet para acceder a la
                    realización de sus operaciones.
                </p>
            </div>

            <!--  -->
            <div class="features_feature">
                <div class="features_icon">
                    <svg>
                        <use xlink:href="img/icons.svg#icon-treding-up"> <img src="./vistas/img/trend.png" alt=""> </use>
                    </svg>
                </div>
                <h5 class="features_header">Fácil gestión del Banco Virtual</h5>
                <p>Fácil, sencillo uso y lo más importante un servicio 100% eficiente.</p>
            </div>

            <img src="./vistas/img/compurpc.jpg" data-src="img/grow.jpg" alt="Plant" class="features_img lazy-img" />
            <!--  -->
            <!--  -->
            <img src="./vistas/img/tarjetass.jpg" data-src="img/card.jpg" alt="Credit card" class="features_img lazy-img" />

            <div class="features_feature">
                <div class="features_icon">
                    <svg>
                        <use xlink:href="img/icons.svg#icon-credit-card"> <img src="./vistas/img/credit-cards.png" alt=""> </use>
                    </svg>
                </div>
                <h5 class="features_header">Obtén tu cuenta gratis ahora</h5>
                <p>
                    Obtener una nueva cuenta es fácil, rápido y totalmente gratis. si no
                    ya lo tienes, empieza ahora mismo.
                </p>
            </div>
            <!--  -->
            <!--  -->
            <!--  -->
        </div>
    </section>


    <section class="section section_cultural-identity">
        <h2>Estamos orgullosos de ser inigualables, ¡igual que tú!</h2>
    </section>

    <section class="section" id="section--2">
        <div class="section_title">
            <h2 class="section_description">Operaciones</h2>
            <h3 class="section_header">
                Todo lo más simple posible.
            </h3>
        </div>

        <div class="operations">
            <!-- The whole box container -->
            <div class="operation_tab-container">
                <button class="btn operations_tab operations_tab--1 operations_tab--active" data-tab="1">
                    <span>01</span>Transferencias Instantáneas
                </button>
                <button class="btn operations-tab operations_tab--2" data-tab="2">
                    <span>02</span>Préstamos instantáneos
                </button>
                <button class="btn operations_tab operations_tab--3" data-tab="3">
                    <span>03</span>Facil y Rapido
                </button>
            </div>
            <!--  -->
            <!--  -->

            <div class="operations_content operations_content--1 operations_content--active">
                <div class="operations_icon operations_icon--1">
                    <svg>
                        <use xlink:href="img/icons.svg#icon-upload"></use>
                    </svg>
                </div>
                <h5 class="operations_header">
                    ¡Transfiere dinero a cualquier persona, al instante! Sin tarifas.
                </h5>
                <p>
                    No cobramos créditos adicionales, todas las transferencias son gratuitas, rápidas
                    y seguro
                </p>
            </div>
            <!--  -->
            <!--  -->
            <div class="operations_content operations_content--2">
                <div class="operations_icon operations_icon--1">
                    <svg>
                        <use xlink:href="img/icons.svg#icon-hme"></use>
                    </svg>
                </div>

                <h5 class="operations_header">
                    Compra una casa o haz tus sueños realidad, con préstamos instantáneos.
                </h5>
                <p>
                    Hacemos prestamos con una tasa de interes bastante comoda, que estas
                    esperando para iniciar su negocio o comprar su propia casa con préstamos
                    de la Virtual que hace tus sueños realidad
                </p>
            </div>

            <div class="operations_content operations_content--3">
                <div class="operations_icon operations_icon--3">
                    <svg>
                        <use xlink:href="img/icons.svg#icon-user-x"></use>
                    </svg>
                </div>
                <h5 class="operations_header">
                    ¿Ya no necesitas tu cuenta? ¡Ningún problema! Ciérralo al instante.
                </h5>
                <p>
                    Cuando termines de realizar tus trámites y quieras salir del
                    Banca Virtual, te ofrecemos un servicio rápido y 100% seguro.
                </p>
            </div>
        </div>
    </section>

    <section class="section" id="section--3">
        <div class="section_title section_title--testimonials">
            <h2 class="section_description">¿No estoy seguro todavía?</h2>
            <h3 class="section_header">
                Miles de personas están simplificando su vida.
            </h3>
        </div>

        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" class="card-img">
                            </div>
                        </div>
    
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/712513/pexels-photo-712513.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" class="card-img">
                            </div>
                        </div>
    
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/1681010/pexels-photo-1681010.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" class="card-img">
                            </div>
                        </div>
    
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/1587009/pexels-photo-1587009.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" class="card-img">
                            </div>
                        </div>
    
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/91227/pexels-photo-91227.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" class="card-img">
                            </div>
                        </div>
    
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" class="card-img">
                            </div>
                        </div>
    
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/842548/pexels-photo-842548.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" class="card-img">
                            </div>
                        </div>
    
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/428338/pexels-photo-428338.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" class="card-img">
                            </div>
                        </div>
    
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/371160/pexels-photo-371160.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" class="card-img">
                            </div>
                        </div>
    
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            <button class="button">View More</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <section class="section section--sing-up">
        <div class="section_title">
            <h3 class="section_header">
                El mejor día para unirse es ahora. Únete a la gran comunidad. Vamos
                llegar al siguiente nivel!
            </h3>
        </div>
        <button class="btn btn--show-modal">¡Abre tu cuenta gratis hoy!</button>
    </section>
<!--
    <footer class="footer">
        <ul class="footer_nav">
            <li class="footer_item">
                <a href="#" class="footer_link">Sobre</a>
            </li>
            <li class="footer_item">
                <a href="#" class="footer_link">Precios</a>
            </li>
            <li class="footer_item">
                <a href="#" class="footer_link">Condiciones de uso</a>
            </li>
            <li class="footer_item">
                <a href="#" class="footer_link">Politica y Privacidad</a>
            </li>
            <li class="footer_item">
                <a href="#" class="footer_link">Carreras</a>
            </li>
            <li class="footer_item">
                <a href="#" class="footer_link">Blog</a>
            </li>
            <li class="footer_item">
                <a href="#" class="footer_link">Contacta con nosotros</a>
            </li>
        </ul>
        <img src="/img/" alt="Logo" class="footer_logo">
    </footer>
-->
    <div class="modal hidden">
        <button class="btn--close-modal">&times;</button>
        <h2 class="modal_header">
            Abre tu cuenta bancaria <br>
            en solo <span class="highlight">5 minutos</span>
        </h2>
        <form action="" class="modal_form">
            <label for="">1 - Facil y rapido</label>
            <br>
            <!--<input type="text">-->
            <label for="">2 - 100% online</label>
            <br>
            <!-- <input type="text"> -->
            <label for="">3 - Banco Virtual</label>
            <!-- <input type="email"> -->
            <button class="btn"> <a href="./vistas/login.php"> Próximo paso &rarr; </a></button>
        </form>
    </div>
    <div class="overlay hidden"></div>

    <script src="script.js"></script>

</body>

<!-- Swiper JS -->
<script src="./vistas/js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="./vistas/js/script.js"></script>

</html>