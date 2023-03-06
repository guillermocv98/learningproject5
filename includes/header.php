<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetería</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700;900&family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header <?php echo($header) ?>">
        <div class="header__contenido contenedor">
            <div class="header__barra">
                <div class="header__logo">
                    <img src="build/img/logo.svg" alt="logo cafetería">
                </div>
                <nav class="navegacion navegacion--principal">
                    <a class="navegacion__link <?php if($inicio) {echo 'activo';};?>" href="index.php">Inicio</a>
                    <a class="navegacion__link <?php if($nosotros) {echo 'activo';};?>" href="nosotros.php">Nosotros</a>
                    <a class="navegacion__link <?php if($proceso) {echo 'activo';};?>" href="proceso.php">Proceso</a>
                    <a class="navegacion__link <?php if($menu) {echo 'activo';};?>" href="menu.php">Menú</a>
                    <a class="navegacion__link <?php if($galeria) {echo 'activo';};?>" href="galeria.php">Galería</a>
                    <a class="navegacion__link <?php if($contacto) {echo 'activo';};?>" href="contacto.php">Contacto</a>
                </nav>
            </div>

            <div class="header__texto">
                <h1><?php echo $slogan; ?></h1>
            </div>
        </div>
    </header>

    <script src="../js/imagenes.js"></script>

