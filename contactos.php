<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Cargar Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="/CSS/styleContacto.css">

    <link rel="stylesheet" href="/CSS/stylePrincipal.css">
</head>

<body>
    <?php include 'layaout/header.php'; ?>

    <section class="contact" id="contactos">
        <div class="container">
            <h2 class="h2contacto">Puedes contactarnos a través de:</h2>
            <h5 class="h5contacto">Correo electrónico: <a href="mailto:cfpn2sm@yahoo.com.ar">cfpn2sm@yahoo.com.ar</a></h5>
            <h5 class="h5contacto">Teléfono Fijo: +54 3838 42-0065</h5>
            <h2 class="h2contacto">O encontrarnos en:</h2>
            <h5 class="h5contacto">Cabo 1º Marcial esq. Maestro Argentino, Santa Maria - Catamarca.</h5>

         <!--  <h2 class="h2contacto">Nuestras redes sociales:</h2>
            <section class="redes-sociales">
                <ul class="ul-iconos">
                    <li class="li-icon"><a href="https://www.facebook.com/Cfp2santamaria/photos"><i class="bi bi-facebook"></i></a></li>
                    <li class="li-icon"><a href="https://twitter.com/home"><i class="bi bi-twitter"></i></a></li>
                    <li class="li-icon"><a href="https://www.instagram.com/centrodeformacionn2/#"><i class="bi bi-instagram"></i></a></li>
                    <li class="li-icon"><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                    <li class="li-icon"><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </section>
        </div>
    </section>!-->

    <div class="form-container">
        <h3 class="h3contacto">En casos de querer consultar sobre su inscripción</h3>
       
        <center>
        <form id="registrationForm" method="post" action="guardar_datos.php">
            <fieldset>
                <legend>Datos</legend>
                <label for="Nombre">Nombre</label>
                <input type="text" id="Nombre" name="nombre" required>
                <br>
                <label for="Apellido">Apellido</label>
                <input type="text" id="Apellido" name="apellido" required>
                <br>
                <label for="Tel_o_Cell">Tel o Cell</label>
                <input type="number" id="Tel_o_Cell" name="tel_o_cell" required>
                <br>
                <label for="Gmail">Email</label>
                <input type="email" id="Gmail" name="gmail" required>
                <br>
                <label for="DNI">DNI</label>
                <input type="number" id="DNI" name="dni" required>
                <br>
                <label for="Edad">Edad</label>
                <input type="number" id="Edad" name="edad" required>
                <br>
                <label for="comentario">Comentario:</label>
                <textarea name="comentario" id="comentario" cols="50" rows="5"></textarea>
            </fieldset>
            <!-- Botón que abre el modal -->
            <button class="btnEnviar" type="button" data-bs-toggle="modal" data-bs-target="#confirmModal">Enviar</button>
        </form>
    </center>
    </div>

    <!-- Modal de confirmación -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmModalLabel">Confirmación de Datos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>¿Estos datos son correctos?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Editar</button>
            <!-- Botón para confirmar y enviar el formulario -->
            <button type="button" class="btn btn-primary" id="confirmButton">Confirmar</button>
          </div>
        </div>
      </div>
    </div>

    <button id="scrollToTopBtn" onclick="scrollToTop()">
        <i class="bi bi-arrow-up-square-fill"></i>
    </button>

    <?php include 'layaout/footer.php'; ?>

    <!-- Script para enviar el formulario al confirmar -->
    <script>
        // Al hacer clic en "Confirmar", se envía el formulario
        document.getElementById('confirmButton').addEventListener('click', function () {
            document.getElementById('registrationForm').submit();
        });
    </script>
</body>
</html>
