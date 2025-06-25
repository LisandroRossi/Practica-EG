<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Zona protegida</h1>

    <?php if (isset($_SESSION['nombre'])): ?>
        <p>¡Bienvenido/a, <strong><?php echo htmlspecialchars($_SESSION['nombre']); ?></strong>!</p>
        <p><a href="login.php">Volver al login</a></p>
    <?php else: ?>
        <p style="color:red;">No tiene acceso a esta página.</p>
        <p><a href="login.php">Volver al login</a></p>
    <?php endif; ?>
</body>
</html>