<?php
session_start(); 

$usuario = $_SESSION['usuario'] ?? null;
$clave = $_SESSION['clave'] ?? null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos de Sesión</title>
</head>
<body>
    <h1>Datos almacenados en la sesión</h1>

    <?php if ($usuario && $clave): ?>
        <p><strong>Nombre de usuario:</strong> <?php echo htmlspecialchars($usuario); ?></p>
        <p><strong>Clave:</strong> <?php echo htmlspecialchars($clave); ?></p>
    <?php else: ?>
        <p>No hay datos almacenados en la sesión.</p>
    <?php endif; ?>

    <p><a href="formulario.php">Volver al formulario</a></p>
</body>
</html>