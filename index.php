<?php
    $pg = "index";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shourtcut icon" href="images/cohete.svg">
</head>

<body id="index" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center cohete">
                <a href="proyectos.php"><img src="images/cohete.svg"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center py-4">
                <div class="index-1">
                    <p class="text-center">Bienvenido a mi sitio web sobre mi informacion.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center py-4">
                    <a href="proyectos.php">
                        <p class="btn btn-index text-center">Concoce mis proyectos</p>
                    </a>
                </div>
            </div>
    </main>
    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="sm-col-12 col-6">
                <a href="https://github.com/Guidomuratore" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/guido-ignacio-muratore-2b14991a2//" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://api.whatsapp.com/send?phone=541122529232" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
            </div>
        </div>
    </footer>
</body>


</html>