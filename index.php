<?php    
    $inicio = true;
    $slogan = 'Disfruta tu deliciosa taza de café';
    $header = 'header--inicio';
    include 'includes/header.php';
?>

    <main class="principal contenedor t-center">
        <section class="sobreNosotros">
            <h2 class="principal__heading principal__heading--1"><span>conoce más</span> sobre nosotros </h2>
            <p class="principal__texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit iure numquam voluptate. Beatae animi facere quisquam dignissimos explicabo nam. Fuga consequatur ut omnis hic, quas alias ducimus ipsum dolorem sed. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid a necessitatibus sint illum. Officiis, repudiandae quas. Vitae, vel perspiciatis dignissimos non inventore nostrum architecto maxime mollitia blanditiis temporibus, facere amet!</p>
        </section>

        <section class="iconos">
            <ul class="iconos__listado">
                <li>
                    <img src="build/img/icono_cafe.svg" alt="icono cafe">
                    <p>Café</p>
                </li>
                <li>
                    <img src="build/img/icono_postre.svg" alt="icono postre">
                    <p>Postres</p>
                </li>
                <li>
                    <img src="build/img/icono_te.svg" alt="icono te">
                    <p>Té</p>
                </li>
            </ul>
        </section>

        <section class="experiencia">
            <?php
                include 'includes/galeria.php';
            ?>
        </section>
    </main>

<?php
    include 'includes/menus.php';
?>

    <section class="opiniones contenedor">
        <div class="opiniones__contenido">
            <h2 class="principal__heading principal__heading--3"><span>lo que dicen nuestros </span>clientes</h2>

            <div class="opinion">
                <p class="opinion__texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga iure veniam modi quaerat eius voluptatem, vel, architecto tempore excepturi iusto velit. In, quibusdam sint amet architecto animi vitae sapiente ipsum!</p>
                <p class="opinion__autor">- Guillermo Cartagena</p>
            </div>
        </div>
    </section>

    <script src="js/imagenes.js"></script>

<?php
    include 'includes/footer.php'
?>