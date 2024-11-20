<!DOCTYPE html>
<html lang="es">
<?php include 'layaout/head.php'; ?>

<body>
    <?php include 'layaout/header.php'; ?>

    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form method="post" action="ver_datos.php" class="form-inline">
            <div class="form-group">
                <label for="Gmail">Email</label>
                <input type="email" id="Gmail" name="gmail" required class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="DNI">DNI</label>
                <input type="number" id="DNI" name="dni" required class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Acceder</button>
        </form>
    </div>

    <?php include 'layaout/footer.php'; ?>
</body
