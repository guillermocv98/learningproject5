<?php    
    $contacto = true;
    $slogan = 'Mejores granos, mejor café';
    $header = 'header--contacto';
    include 'includes/header.php';
?>

    <main class="principal principal--contacto contenedor t-center">
        <h2 class="principal__heading principal__heading--1"><span>reserva tu</span> mesa </h2>

        <div class="contacto__contenido">
            <form class="contacto__formulario">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" placeholder="Tu nombre" required>
                </div>
                <div class="campo">
                    <label for="email">Email:</label>
                    <input type="text" id="email" placeholder="Tu email" required>
                </div>
                <div class="campo">
                    <label for="comensales">Comensales:</label>
                    <input type="number" id="comensales" placeholder="comensales" min="1" required>
                </div>
                <div class="campo">
                    <label for="hora">Hora:</label>
                    <input type="time" id="hora" min="09:00" max="22:00" required>
                </div>
                <div class="campo">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" required>
                </div>
                <div class="campo">
                    <input type="submit" value="enviar">
                </div>
            </form>
        </div>
    </main>


<?php
    include 'includes/footer.php';
?>