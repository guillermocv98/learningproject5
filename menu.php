<?php 
    $menu = true;
    $header = 'header--menu';
    $slogan = 'Disfruta nuestro delicioso menú';
    include 'includes/header.php';
?>

    <main class="principal principal--menu contenedor t-center">
        <h2 class="principal__heading principal__heading--1"><span>utilizamos los</span> mejores ingredientes </h2>
        
        <div class="ingredientes">
            <p class="ingredientes__texto"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo inventore enim consectetur aliquid aut est iusto, autem suscipit quo ad laborum qui quos ratione deleniti illo alias cumque eius! Ea. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, inventore? Ratione pariatur tenetur cupiditate eveniet ipsam, veritatis autem! Earum quibusdam repellendus nisi est inventore iste dignissimos cumque consequatur necessitatibus quisquam?</p>
            <div class="ingredientes__img">
                <picture>
                    <source srcset="build/img/cafe.avif" type="image/avif">
                    <source srcset="build/img/cafe.webp" type="image/webp">
                
                    <img loading="lazy" src="build/img/cafe.jpg" width="500" height="300" alt="imagen ">
                </picture>
            </div>
        </div>
    </main>
    
<?php
    include 'includes/menus.php';
?>

<?php
    $modFooter = 'footer__contenido--menu';
    include 'includes/footer.php';
?>