<?php
$duracion = 86400 * 30;
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
    setcookie('contador', $contador, time() + $duracion);
    $mensaje = "Esta es tu visita número $contador a esta página.";
} else {
    $contador = 1;
    setcookie('contador', $contador, time() + $duracion);
    $mensaje = "¡Bienvenido! Esta es tu primera visita a esta página.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de visitas con Cookies</title>
</head>
<body>
    <h1>Contador de visitas</h1>
    <p><?php echo $mensaje; ?></p>
</body>
</html>