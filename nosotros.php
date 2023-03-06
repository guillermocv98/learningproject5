<?php
    $nosotros = true;
    $slogan = 'Una nueva experiencia cada día';
    $header = 'header--nosotros';
    include 'includes/header.php';
    
?>


    <main class="principal contenedor t-center">            
        <h2 class="principal__heading principal__heading--1"><span>conoce más</span> sobre nosotros </h2>

        <div class="nosotros__contenido">
            <div class="nosotros__img">
                <picture>
                    <source srcset="build/img/nosotros_sidebar.avif" type="image/avif">
                    <source srcset="build/img/nosotros_sidebar.webp" type="image/webp">
                
                    <img loading="lazy" src="build/img/nosotros_sidebar.jpg" width="500" height="300" alt="imagen nosotros sidebar">
                </picture>
            </div>

            <div class="nosotros__texto">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae commodi vitae rem sed? Consectetur odio porro alias, similique iusto sint dolorum laudantium, veritatis aliquam, amet eveniet corporis optio placeat nulla.</p>
                <blockquote>¡Excelente sabor!</blockquote>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae commodi vitae rem sed? Consectetur odio porro alias, similique iusto sint dolorum laudantium, veritatis aliquam, amet eveniet corporis optio placeat nulla.</p>
            </div>
        </div>
    </main>

<?php
    include 'includes/footer.php'
?>