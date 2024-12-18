/*
<!DOCTYPE html>
<html>
<?php include 'layaout/head.php'; ?>

<body>

<?php include 'layaout/header.php'; ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Inicializar variable para el filtro de DNI
$filtro_dni = "";

// Verificar si se ha enviado un filtro de DNI
if (isset($_POST['filtro_dni']) && !empty($_POST['filtro_dni'])) {
    $filtro_dni = $_POST['filtro_dni'];
    $sql = "SELECT * FROM inscripciones WHERE dni = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $filtro_dni);
} else {
    // Si no hay filtro, mostrar el último registro ingresado
    $sql = "SELECT * FROM inscripciones ORDER BY id DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
}

$stmt->execute();
$resultado = $stmt->get_result();

?>

<h2>Lista de Registros</h2>
<form method="post" action="ver_registros.php" class="form-inline">
    <label for="filtro_dni">Filtrar por DNI:</label>
    <input type="number" name="filtro_dni" id="filtro_dni" placeholder="Ingrese DNI" class="form-control" value="<?php echo isset($filtro_dni) ? $filtro_dni : ''; ?>">
    <button type="submit" class="btn btn-primary">Filtrar</button>
</form>

<?php
if ($resultado->num_rows > 0) {
    echo "<table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tel o Cell</th>
                    <th>Email</th>
                    <th>DNI</th>
                    <th>Edad</th>
                    <th>Comentario</th>
                </tr>
            </thead>
            <tbody>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>{$fila['nombre']}</td>
                <td>{$fila['apellido']}</td>
                <td>{$fila['nContacto']}</td>
                <td>{$fila['gmail']}</td>
                <td>{$fila['dni']}</td>
                <td>{$fila['edad']}</td>
                <td>{$fila['comentario']}</td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p>No se encontraron registros.</p>";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>

<?php include 'layaout/footer.php'; ?>

</body>
</html>
 */