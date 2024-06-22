<?php
    $pg = "contacto";

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
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shourtcut icon" href="images/cohete.svg">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h1 class="col-sm-12 col-12 py-4">Contacto</h1>
            </div>
            <div class="row">
                <div class="col-6 py-4">
                    <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
                </div>
                <div class="col-6 py-4">
                    <form action="" method="POST">
                        <div class="pb-3">
                            <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control shadow">
                        </div>
                        <div class="pb-3">
                            <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo" class="form-control shadow">
                        </div>
                        <div class="pb-3">
                            <input type="tel" id="txtTelefono" name="txtTelefono" placeholder="Telefono" class="form-control shadow">
                        </div>
                        <div class="pb-3">
                            <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui tu mensaje" class="form-control shadow"></textarea>
                        </div>
                        <div class="pb-3">
                            <button class="btn btn-enviar text-center" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
    </main>
    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="col-12">
                <a href="https://github.com/Guidomuratore" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/guido-ignacio-muratore-2b14991a2//" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://api.whatsapp.com/send?phone=541122529232" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
            </div>
        </div>
    </footer>
</body>


</html>