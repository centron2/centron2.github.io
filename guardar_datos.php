<!DOCTYPE html>
<html lang="es">
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

// Inicializar mensaje de éxito
$mensaje_exito = "";

// Comprobar si se han enviado datos para insertar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nContacto = $_POST['tel_o_cell'];
    $gmail = $_POST['gmail'];
    $dni = $_POST['dni'];
    $edad = $_POST['edad'];
    $comentario = $_POST['comentario'];

    // Validar DNI y Edad
    if ($dni <= 10000000) {
        echo "<script>alert('ERROR: El DNI debe ser mayor a 10,000,000.'); window.location.href = 'contactos.php';</script>";
    } elseif ($edad < 18) {
        echo "<script>alert('ERROR: La edad debe ser mayor o igual a 18.'); window.location.href = 'contactos.php';</script>";
    } else {
        // Verificar si el email o el DNI ya existen en la base de datos
        $check_sql = "SELECT * FROM inscripciones WHERE gmail = ? OR dni = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("si", $gmail, $dni);
        $check_stmt->execute();
        $check_stmt->store_result();

        // Si el correo o DNI ya están registrados, mostrar un mensaje de error
        if ($check_stmt->num_rows > 0) {
            echo "<script>alert('ERROR: El Email o DNI ya está registrado.'); window.location.href = 'contactos.php';</script>";
        } else {
            // Preparar y ejecutar la consulta SQL para insertar los datos
            $sql = "INSERT INTO inscripciones (nombre, apellido, nContacto, gmail, dni, edad, comentario) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssisiss", $nombre, $apellido, $nContacto, $gmail, $dni, $edad, $comentario);

            if ($stmt->execute()) {
                // Mostrar un mensaje de éxito
                $mensaje_exito = "Los datos se han guardado correctamente.";
            } else {
                echo "ERROR AL GUARDAR LOS DATOS: " . $conn->error;
            }

            // Cerrar la consulta
            $stmt->close();
        }

        // Cerrar la conexión
        $check_stmt->close();
    }
}

$conn->close();
?>

<?php if (!empty($mensaje_exito)): ?>
    <h2><?php echo $mensaje_exito; ?></h2>
<?php else: ?>
    <h2>Formulario de Inscripción</h2>
    <!-- Aquí puedes agregar tu formulario HTML para la inscripción -->
    <form method="post" action="contactos.php">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="text" name="tel_o_cell" placeholder="Tel o Cell" required>
        <input type="email" name="gmail" placeholder="Email" required>
        <input type="number" name="dni" placeholder="DNI" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <textarea name="comentario" placeholder="Comentario"></textarea>
        <button type="submit">Enviar</button>
    </form>
<?php endif; ?>

<?php include 'layaout/footer.php'; ?>

</body>
</html>
