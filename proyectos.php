
<?php
    $pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shourtcut icon" href="images/cohete.svg">
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h1 class="col-sm-12 col-12 py-4">Proyectos</h1>
            </div>
            <div class="row">
                <div class="col-12 py-2">
                    <p>Los siguientes son algunos de los trabajos que he realizado:
                    <p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 proyecto text-center">
                <div class="col-12 py-4">
                    <img src="images/portfolio-guido.png" alt="ABM Clientes" class="img-fluid">
                    <h2 class="px-3 py-2 text-center">Portfolio</h2>
                    <p class="text-center px-3 py-1">Primer portfolio. Realizado en HTML,CSS,Boostrap y Json</p>
                    <div class="row py-4 pb-3 px-3 text-center">
                        <div class="col-12">
                            <a href="#" class="btn btn-info text-center">Ver online</a>
                        </div>
                    </div>
                </div>
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