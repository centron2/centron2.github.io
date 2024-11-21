<?php
    // Incluir la cabecera
    include 'layaout/head.php';
    include 'layaout/header.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos a nuestra escuela</title>
    <link rel="stylesheet" href="contacto2.css">

    <style>
        /* Estilos del carrusel */
        .carousel {
            overflow: hidden;
            width: 100%;
        }

        .marquee-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
        }

        .marquee-content {
            display: flex;
            flex-wrap: nowrap;
            animation: scroll 20s linear infinite;
        }

        .marquee img {
            width: 250px;
            height: 250px;
            margin-right: 10px;
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body>

    <!-- Contenido de la página -->
    <div class="hero">
        <div class="container text-center">
            <h1>Bienvenidos a nuestra escuela</h1>
        </div>
    </div>

    <section class="carousel">
        <div class="marquee-container">
            <div class="marquee-content">
                <div class="marquee">
                    <img src="IMG/bienvenida/21septiembre.jpg" alt="21 de Septiembre">
                    <img src="IMG/bienvenida/albañileria.jpg" alt="Albañilería">
                    <img src="IMG/bienvenida/carpinteria.png" alt="Carpintería">
                    <img src="IMG/bienvenida/informatica.jpg" alt="Informática">
                    <img src="IMG/bienvenida/peluquieria.jpg" alt="Peluquería">
                </div>
            </div>
        </div>
    </section>

    <br><br>
    <h2 class="diario-title">Noticias de la Semana</h2>
    <br>

    <section class="noticias-containersecundario">
        <article>
            <img src="/img2.0/construccion.jpg" alt="Proceso de construcción">
            <h3>Proceso de Construcción</h3>
            <p>Avances en la construcción nueva aula CFPN2, en articulación con la Municipalidad de Santa María, continuamos hacia delante para concretar la meta de tener un nuevo espacio para la enseñanza. #fpcatamarca #JuntosPodemos</p>
            <a href="https://www.facebook.com/share/p/1M8sXMLUnH/" target="_blank">Leer más</a>
        </article>
        <article>
            <img src="/img2.0/halloween.jpg" alt="Halloween">
            <h3>Halloween</h3>
            <p>Propuesta para niños Taller de Halloween, (hasta 10 años), aprenderán hacer (cupcakes y galletas), días Jueves primer grupo y viernes segundo grupo, desde las 15:00:h. Valor $2.500 incluye insumos. te esperamos Vení disfrazado.!! p/d inscripciones a los números que figuran el el flyer.</p>
            <a href="https://www.facebook.com/share/p/15MnXWt92y/" target="_blank">Leer más</a>
        </article>
    </section>

    <style>
        /* Estilo para el botón de ir arriba */
        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #343a40;
            color: #08f7fe;
            border: none;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 0 10px #08f7fe, 0 0 20px #08f7fe, 0 0 30px #08f7fe;
            transition: box-shadow 0.3s ease-in-out;
        }

        #scrollToTopBtn:hover {
            box-shadow: 0 0 20px #08f7fe, 0 0 30px #08f7fe, 0 0 40px #08f7fe;
        }

        #scrollToTopBtn svg {
            width: 30px;
            height: 30px;
            fill: currentColor;
        }
    </style>

    <button id="scrollToTopBtn" onclick="scrollToTop()">
        <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
            <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0" />
        </svg>
    </button>

    <script>
        window.onscroll = function () {
            scrollFunction();
        };

        function scrollFunction() {
            var scrollToTopBtn = document.getElementById("scrollToTopBtn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.style.display = "flex";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

</body>

</html>

<?php
    // Incluir el pie de página
    include 'layaout/footer.php';
?>
