<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" type="image/jpeg" sizes="960x957" href="assets/img/Nerd-Pizza.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registro</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Badges-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
</head>

<body class="text-body" style="background-color: #969A97;">
    <section style="background-color: #F6CD13;">
        <!-- Header -->
        <nav class="navbar navbar-light navbar-expand-md py-3">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="https://equipo1.prog5a.com"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                            <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                            </path>
                            <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                            </path>
                        </svg></span><span>Nerd Pizza</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-3">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                    </ul>
                    <div class="dropdown" style="padding-left: 0px;"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="text-decoration: none;color: #000000;padding-left: 0px;margin: 0px 0px 0px 80px;margin-left: 76px;">MENÚ</a>
                        <div class="dropdown-menu" style="background-color: #f62e28;padding-right: 0px;margin-right: 4px;padding-left: 0px;margin-left: -8px;">
                            <a class="dropdown-item" href="index.php">Inicio</a>
                            <a class="dropdown-item" href="ingredientes.php">Ingredientes</a>
                            <a class="dropdown-item" href="Login.html">Inicio de sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Content -->
        <div align="center">
            <form method="post" action="php scripts\registroU.php">
                <fieldset>
                <legend> Registro </legend>
                <p>
                    <label> Escriba su nombre:
                    <input type="text" name="nombre">
                    </label>
                </p>
                <p>
                    <label> Escriba su apellido:
                    <input type="text" name="apellido">
                    </label>
                </p>
                <p>
                    <label>Escriba su correo electrónico:
                    <input type="text" name="email">
                    </label>
                </p>
                <p>
                    <label>Escriba una contraseña:
                    <input type="text" name="pass">
                    </label>
                </p>
                <p>
                    <label>Escriba de nuevo la contraseña:
                    <input type="text" name="pass2">
                    </label>
                </p>
                <input type="submit" value="enviar">
                </fieldset>
            </form>
        </div>
    </section>
    <!-- Pie de pagina -->
    <div class="container text-center py-4 py-lg-5" style="background-color: #969A97;">
        <div class="row justify-content-center">
            <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                <div class="fw-bold d-flex align-items-center mb-2"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                            <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                            </path>
                            <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                            </path>
                        </svg></span><span>Nerd Pizza</span></div>
                <p>Con todo el sabor de la pizza con lentes...</p>
            </div>
            <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                <h3 class="fs-6">Servicios</h3>
                <ul class="list-unstyled">
                    <li><a class="link-secondary" href="#">Servicio a domicilio</a></li>
                    <li><a class="link-secondary" href="#">Eventos</a></li>
                    <li><a class="link-secondary" href="#">Reservaciones</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                <h3 class="fs-6">Productos</h3>
                <ul class="list-unstyled">
                    <li><a class="link-secondary" href="#">Pizza</a></li>
                    <li><a class="link-secondary" href="#">Complementos</a></li>
                    <li><a class="link-secondary" href="#">Paquetes</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                <h3 class="fs-6">Horarios</h3>
                <ul class="list-unstyled">
                    <li><a class="link-secondary" href="#">Servicio a domicilio</a></li>
                    <li><a class="link-secondary" href="#">Atención en sucursales</a></li>
                    <li><a class="link-secondary" href="#">Ubicación</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div id="RedesSociales" align="center">
            <hr id="AntesSociales">
            <script lang="JavaScript" src="assets/js/Redes Sociales.js"></script>
            <h3><a href="mailto:correo@server.com" class="TítuloArtículo" id="ContactoCorreo">Contacto</a></h3>
            <img class="RedSocial" alt="Ícono de Facebook" id="Facebook" onclick="javascript:AbrirFacebook();" src="assets/img/íconoFacebook.png" />
            <img class="RedSocial" alt="Ícono de WhatsApp" id="WhatsApp" onclick="javascript:AbrirWhatsApp();" src="assets/img/íconoWhatsApp.png" />
            <img class="RedSocial" alt="Ícono de Messenger" id="Messenger" onclick="javascript:AbrirMessenger();" src="assets/img/íconoMessenger.png" />
            <img class="RedSocial" alt="Ícono de Telegram" id="Telegram" onclick="javascript:AbrirTelegram();" src="assets/img/íconoTelegram.png" />
            <img class="RedSocial" alt="Ícono de Twitter" id="Twitter" onclick="javascript:AbrirTwitter();" src="assets/img/íconoTwitter.png" />
            <img class="RedSocial" alt="Ícono de Instagram" id="Instagram" onclick="javascript:AbrirInstagram();" src="assets/img/íconoInstagram.png" />
        </div>
        <div class="text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center d-flex justify-content-center align-items-center align-content-center justify-content-md-center align-items-md-center pt-3">
            <p class="text-center text-muted d-flex d-md-flex align-items-center justify-content-md-center align-items-md-center mb-0">
                Copyright © Nerd Pizza 2022</p>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>