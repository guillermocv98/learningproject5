<?php
    $proceso = true;
    $slogan = 'los verdaderos expertos del café';
    $header = 'header--proceso';
    include 'includes/header.php';
?>

    <main class="principal contenedor t-center">
        <div class="procesos">
            <div class="proceso">
                <div class="proceso__img">
                    <picture>
                        <source srcset="build/img/proceso_1.avif" type="image/avif">
                        <source srcset="build/img/proceso_1.webp" type="image/webp">
                    
                        <img loading="lazy" src="build/img/proceso_1.jpg" width="500" height="300" alt="imagen proceso">
                    </picture>
                </div>

                <div class="proceso__info">
                    <h2 class="proceso__heading">granos de café</h2>

                    <p class="proceso__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero necessitatibus architecto voluptate, iusto nobis officiis inventore eaque id expedita autem explicabo ad, modi minus cupiditate dolore.</p>
                </div>
            </div> <!-- .proceso -->

            <div class="proceso">
                <div class="proceso__img">
                    <picture>
                        <source srcset="build/img/proceso_2.avif" type="image/avif">
                        <source srcset="build/img/proceso_2.webp" type="image/webp">
                    
                        <img loading="lazy" src="build/img/proceso_2.jpg" width="500" height="300" alt="imagen proceso">
                    </picture>
                </div>

                <div class="proceso__info">
                    <h2 class="proceso__heading">tostar el café</h2>

                    <p class="proceso__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero necessitatibus architecto voluptate, iusto nobis officiis inventore eaque id expedita autem explicabo ad, modi minus cupiditate dolore.</p>
                </div>
            </div> <!-- .proceso -->
            <div class="proceso">
                <div class="proceso__img">
                    <picture>
                        <source srcset="build/img/proceso_3.avif" type="image/avif">
                        <source srcset="build/img/proceso_3.webp" type="image/webp">
                    
                        <img loading="lazy" src="build/img/proceso_3.jpg" width="500" height="300" alt="imagen proceso">
                    </picture>
                </div>

                <div class="proceso__info">
                    <h2 class="proceso__heading">empaquetar el café</h2>

                    <p class="proceso__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero necessitatibus architecto voluptate, iusto nobis officiis inventore eaque id expedita autem explicabo ad, modi minus cupiditate dolore.</p>
                </div>
            </div> <!-- .proceso -->
            <div class="proceso">
                <div class="proceso__img">
                    <picture>
                        <source srcset="build/img/proceso_4.avif" type="image/avif">
                        <source srcset="build/img/proceso_4.webp" type="image/webp">
                    
                        <img loading="lazy" src="build/img/proceso_4.jpg" width="500" height="300" alt="imagen proceso">
                    </picture>
                </div>

                <div class="proceso__info">
                    <h2 class="proceso__heading">moler granos de café</h2>

                    <p class="proceso__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero necessitatibus architecto voluptate, iusto nobis officiis inventore eaque id expedita autem explicabo ad, modi minus cupiditate dolore.</p>
                </div>
            </div> <!-- .proceso -->
            <div class="proceso">
                <div class="proceso__img">
                    <picture>
                        <source srcset="build/img/proceso_5.avif" type="image/avif">
                        <source srcset="build/img/proceso_5.webp" type="image/webp">
                    
                        <img loading="lazy" src="build/img/proceso_5.jpg" width="500" height="300" alt="imagen proceso">
                    </picture>
                </div>

                <div class="proceso__info">
                    <h2 class="proceso__heading">disfruta del café</h2>

                    <p class="proceso__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero necessitatibus architecto voluptate, iusto nobis officiis inventore eaque id expedita autem explicabo ad, modi minus cupiditate dolore.</p>
                </div>
            </div> <!-- .proceso -->
        </div>
    </main>

<?php
    include 'includes/footer.php'
?>