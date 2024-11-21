<?php
    // Incluir la cabecera y el encabezado si lo deseas modular
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
        /* Estilos originales del código */

        .carousel {
            overflow: hidden;
            width: 100%; /* El contenedor debe ocupar el 100% del ancho de la pantalla */
        }

        .marquee-container {
            display: flex;
            align-items: center;
            justify-content: flex-start; /* Asegura que las imágenes estén alineadas a la izquierda */
            width: 100%; /* Asegura que el contenedor ocupe el 100% de la pantalla */
        }

        .marquee-content {
            display: flex;
            flex-wrap: nowrap; /* Esto asegura que las imágenes se alineen horizontalmente sin que se apilen */
            animation: scroll 20s linear infinite;
        }

        .marquee img {
            width: 250px;
            height: 250px;
            margin-right: 10px; /* Espacio entre las imágenes */
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }

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
            display: none; /* Oculto por defecto */
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

        /* Estilo del texto en movimiento */
        .moving-text {
            position: fixed;
            top: 50%;
            left: 0;
            background-color: #000;
            color: #fff;
            padding: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .neon-text p {
            font-size: 40px;
            margin: 0;
        }

        .neon-text a {
            color: #08f7fe;
            text-decoration: none;
        }

        .neon-text a:hover {
            color: #0ff;
        }

        /* Cerrar botón */
        #closeButton {
            margin-left: 15px;
            background: #555;
            color: #fff;
            border: none;
            cursor: pointer;
        }

    </style>
</head>

<body>

    <!-- Contenido de tu página -->
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

    <section class="noticias-containersecundario">
        <article>
            <img src="/img2.0/silicon.jpg" alt="Silicon Valley">
            <h3>Experiencia Silicon Valley</h3>
            <p>Participantes de la Experiencia Silicon Valley 2024 propuestos por la Fundación del Tucumán, con integrantes de Paraguay, Bolivia y Argentina (Salta, Jujuy, Tucumán y Catamarca), Visitas a Google, HP, Plug and Play, Tesla, Stanford University, Amazon, Draper University, Linckein, SAP, Autodesk, Indie Bio, más otras aceleradoras de Startups, tecnológicas y biotecnológicas. Nodo Tecnológico - Catamarca Capital Municipalidad de Santa María #FPCatamarca #CFPN2</p>
            <a href="https://www.facebook.com/share/p/1EiPfLNCHs/" target="_blank">Leer más</a>
        </article>

        <article>
            <img src="/img2.0/diaEstu2.jpg" alt="Jornada día del estudiante">
            <h3>Jornada Día del Estudiante</h3>
            <p>Jornada por el Día del estudiante y elección de la Reina y princesas. Agradecemos al complejo policial por brindarnos sus instalaciones.</p>
            <a href="https://www.facebook.com/share/p/19ChxLjDsX/" target="_blank">Leer más</a>
        </article>

        <article>
            <img src="/img2.0/energiaReno.jpg" alt="Energía Renovable">
            <h3>Energía Renovable</h3>
            <p>Jornada de capacitación para alumnos IES de la Tecnicatura Superior en Gestión de Energías Renovables, dictado por el Prof. Fernando Paz y alumnos de Electricidad Domiciliaria. Articulación IES/CFPN2.</p>
            <a href="https://www.facebook.com/share/p/14k2aGB6bG/" target="_blank">Leer más</a>
        </article>
    </section>

    <div class="moving-text neon-text" id="movingText">
        <p><a href="inscripcion.html" target="_blank">Inscripciones 2025</a></p>
        <button id="closeButton" onclick="closeMovingText()">Cerrar</button>
    </div>

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

        function closeMovingText() {
            document.getElementById('movingText').style.display = 'none';
        }
    </script>

</body>

</html>

<?php
    // Incluir pie de página si lo deseas modular
    include 'layaout/footer.php';
?>
