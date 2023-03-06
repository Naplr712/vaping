<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/banner.css">
</head>

<body>
    <div class="container_carrusel">
        <div class="mySlides">
            <img src="public/img_banner/BANNER 1.webp" alt="imagen-1">
        </div>
        <div class="mySlides">
            <img src="public/img_banner/BANNER 2.webp" alt="">
        </div>
        <div class="mySlides">
            <img src="public/img_banner/BANNER 3.webp" alt="">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="elements">
            <button class="quadrate" onclick="currentSlide(1)"></button>
            <button class="quadrate" onclick="currentSlide(2)"></button>
            <button class="quadrate" onclick="currentSlide(3)"></button>
        </div>
    </div>
    <div class="nosotros">
        <h2>Sobre Nosotros</h2>
    </div>
    <div class="container_nosotros">
        <img src="public/img_banner/logoNosotros.webp" alt="Mi imagen">
        <div class="texto">
            <h3> ¿ QUE ES VAPING CLOUD?</h3>
            <p>Lorem Ipsum es simplemente el texto de relleno de
                las imprentas y archivos de texto. Lorem Ipsum ha
                sido el texto de relleno estándar de las industrias
                desde el año 1500, cuando un impresor (N. del T.
                persona que se dedica a la imprenta) desconocido usó
                una galería de textos y los mezcló de tal manera que
                logró hacer un libro de textos especimen.
        </div>
    </div>
    <script>
    let slideIndex = 1;
    showSlides(slideIndex)

    setInterval(function() {
        plusSlides(1);
    }, 4000);

    function plusSlides(n) {
        showSlides(slideIndex += n)
    }

    function currentSlide(n) {
        showSlides(slideIndex = n)
    }

    function showSlides(n) {
        let i;
        let slides = document.querySelectorAll(".mySlides");
        let quadrates = document.querySelectorAll(".quadrate");
        if (n > slides.length) slideIndex = 1
        if (n < 1) slideIndex = slides.length
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"
        }
        for (i = 0; i < quadrates.length; i++) {
            quadrates[i].className = quadrates[i].className.replace("active", "")
        }
        slides[slideIndex - 1].style.display = "block";
        quadrates[slideIndex - 1].className += " active";
    }
    </script>

    <?php require_once("views/layouts/footer.php") ?>
</body>

</html>