<?php
$pg = "contacto";

if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    if($nombre != "" && $correo != "" && $telefono != "" && $mensaje != "" ){

    // Varios destinatarios
    $para = "santi.f97@gmail.com";
    $titulo = 'Recibiste un mensaje desde tu Web';

    // mensaje
    $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje
    ";

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: santi.f97@gmail.com' . "\r\n";
    $cabeceras .= 'From: contacto@nsantiferreyra.com.ar' . "\r\n";

    // Enviarlo
    //mail($para, $titulo, $cuerpo, $cabeceras);
    header("Location: confirmacion-envio.php");
}
}
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php") ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que me contactes enviándome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow" placeholder="Escribe aquí tu mensaje"></textarea>
                    </div>
                    <div class="">
                        <button class="btn" type="submit" name="btnEnviar" id="btnEnviar">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>

    </main>

    <footer class="container mt-auto pb-4">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="mailto:santi_f97@hotmial.com">santi_f97@hotmail.com</a>
            </div>
        </div>
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=3535653057" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>
</body>

</html>