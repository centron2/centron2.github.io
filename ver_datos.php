<?php include 'layaout/head.php'; ?>
<?php include 'layaout/header.php'; ?>
<?php include 'layaout/footer.php'; ?>

<?php
// Conexión a la base de datos
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

// Formulario para filtrar por DNI
echo '<form method="POST" action="">
        <label for="filterDNI">Buscar por DNI:</label>
        <input type="text" id="filterDNI" name="filterDNI" placeholder="Ingrese el DNI">
        <button type="submit" name="filter">Buscar</button>
      </form>';

// Mostrar todos los registros o los filtrados si se envía el formulario
if (isset($_POST['filter'])) {
    $filterDNI = !empty($_POST['filterDNI']) ? trim($_POST['filterDNI']) : null;

    // Consulta con filtro de DNI
    $sql = "SELECT * FROM inscripciones WHERE 1=1";
    
    if ($filterDNI !== null) {
        $sql .= " AND dni = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $filterDNI); // 's' para cadena
    } else {
        $stmt = $conn->prepare($sql);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Resultados de la búsqueda</h2>";
        echo "<table class='table table-bordered'>";
        echo "<thead><tr><th>Nombre</th><th>Apellido</th><th>Teléfono o Celular</th><th>Email</th><th>DNI</th><th>Edad</th><th>Comentario</th></tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($row['apellido']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nContacto']) . "</td>";
            echo "<td>" . htmlspecialchars($row['gmail']) . "</td>";
            echo "<td>" . htmlspecialchars($row['dni']) . "</td>";
            echo "<td>" . htmlspecialchars($row['edad']) . "</td>";
            echo "<td>" . htmlspecialchars($row['comentario']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<h3>No se encontraron registros que coincidan con el DNI ingresado.</h3>";
    }

    $stmt->close();
} else {
    // Mostrar todos los registros si no se ha filtrado
    $sql = "SELECT * FROM inscripciones";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Todos los Registros</h2>";
        echo "<table class='table table-bordered'>";
        echo "<thead><tr><th>Nombre</th><th>Apellido</th><th>Teléfono o Celular</th><th>Email</th><th>DNI</th><th>Edad</th><th>Comentario</th></tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($row['apellido']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nContacto']) . "</td>";
            echo "<td>" . htmlspecialchars($row['gmail']) . "</td>";
            echo "<td>" . htmlspecialchars($row['dni']) . "</td>";
            echo "<td>" . htmlspecialchars($row['edad']) . "</td>";
            echo "<td>" . htmlspecialchars($row['comentario']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<h3>No se encontraron registros en la base de datos.</h3>";
    }
}

// Cerrar la conexión
$conn->close();
?>
