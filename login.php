<?php
session_start();
require_once "conexion-ej6.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["mail"])) {
    $mail = trim($_POST["mail"]);

    $stmt = $conexion->prepare("SELECT nombre FROM alumnos WHERE mail = ?");
    $stmt->bind_param("s", $mail);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($nombre);
        $stmt->fetch();
        $_SESSION['nombre'] = $nombre;
        header("Location: verificar.php");
        exit;
    } else {
        $mensaje = "No se encontró ningún alumno con ese correo.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso de Alumno</title>
</head>
<body>
    <h1>Ingresar al sistema</h1>
    <form method="post" action="login.php">
        <label for="mail">Correo del alumno:</label>
        <input type="email" id="mail" name="mail" required>
        <button type="submit">Ingresar</button>
    </form>

    <?php if ($mensaje): ?>
        <p style="color:red;"><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <p><a href="verificar.php">Ir a página protegida</a></p>
</body>
</html>