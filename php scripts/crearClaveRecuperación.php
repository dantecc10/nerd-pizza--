<?php

function madreFunciones()
{
    # Generación de clave
    function generaClave()
    {
        # $contadorDígitos = 0;
        $min = 100000;
        $max = 999999;
        # $dígitoAleatorioGenerado = rand(1, $max);
        $claveRecuperación = rand($min, $max);

        # echo $claveRecuperación;
        return $claveRecuperación;
    }

    $claveRecuperaciónEmail = generaClave();
    echo ("Aquí está la clave de recuperación heredada de la función generadora: " . $claveRecuperaciónEmail);

    # Carga a base de datos
    $conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
    $consulta = "SELECT count(*) FROM `claves` WHERE `clave_recuperación`=$claveRecuperaciónEmail";

    $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");

    if ($resultado == true) {
        echo "Validación exitosa";

        # Envío de email y clave validada
        # Sección de email
        include('Mail.php');
        $mensaje = ("Nerd Pizza ha recibido una solicitud de reestablecimiento de contraseña; ingresa el siguiente código para poder cambiar tu contraseña: " . $claveRecuperaciónEmail . ".");
        $remitente = "nerdpizza@equipo1.prog5a.com";
        $destinatario = "dante@castelancarpinteyro.club, jeremy.hdez9@gmail.com";
        $asunto = "Reestablecimiento de contraseña";

        $origenDestino = "From: $remitente" . " /r/n" . "CC: " . $destinatario;
        mail($destinatario, $asunto, $mensaje, $origenDestino);

        echo ("Aquí ya se envió la clave... se supone");
    } else {
        echo "La clave ya existe o no pudo ser validad en la base de datos.";
    }
}
madreFunciones();
