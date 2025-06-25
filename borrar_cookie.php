<?php
// Borramos la cookie estableciendo tiempo en el pasado
setcookie("tipo_titular", "", time() - 3600);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Cookie borrada</title>
</head>
<body>
    <h1>Cookie borrada</h1>
    <p>La selección de titular ha sido borrada.</p>
    <a href="periodico.php">Volver al periódico</a>
</body>
</html>