<?php
$duracion = 86400 * 30;

$nombreGuardado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nombre'])) {
    $nombre = trim($_POST['nombre']);
    setcookie("usuario_nombre", $nombre, time() + $duracion);
    $nombreGuardado = $nombre;
} else if (isset($_COOKIE['usuario_nombre'])) {
    $nombreGuardado = $_COOKIE['usuario_nombre'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con Cookie de Usuario</title>
</head>
<body>
    <h1>Ingrese su nombre de usuario</h1>
    <form action="index-prac7-ej3.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombreGuardado); ?>" required>
        <button type="submit">Guardar nombre</button>
    </form>

    <?php if (!empty($nombreGuardado)): ?>
        <p>Último nombre guardado: <strong><?php echo htmlspecialchars($nombreGuardado); ?></strong></p>
    <?php endif; ?>
</body>
</html>