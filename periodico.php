<?php
$duracion = 86400 * 30;

$tiposTitulares = [
    'politica' => "Titular político: Reforma legislativa aprobada hoy",
    'economica' => "Titular económico: La bolsa alcanza máximos históricos",
    'deportiva' => "Titular deportivo: El equipo local gana el campeonato"
];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['titular'])) {
    $tipoSeleccionado = $_POST['titular'];
    if (array_key_exists($tipoSeleccionado, $tiposTitulares)) {
        setcookie("tipo_titular", $tipoSeleccionado, time() + $duracion);
    }
}

$tipoGuardado = $_COOKIE['tipo_titular'] ?? null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Periódico Simulado</title>
</head>
<body>
    <h1>Periódico Simulado</h1>

    <form action="periodico.php" method="post">
        <p>Seleccione el tipo de titular que desea ver:</p>
        <label>
            <input type="radio" name="titular" value="politica"
                <?php if ($tipoGuardado === 'politica') echo 'checked'; ?>>
            Política
        </label><br>
        <label>
            <input type="radio" name="titular" value="economica"
                <?php if ($tipoGuardado === 'economica') echo 'checked'; ?>>
            Económica
        </label><br>
        <label>
            <input type="radio" name="titular" value="deportiva"
                <?php if ($tipoGuardado === 'deportiva') echo 'checked'; ?>>
            Deportiva
        </label><br><br>
        <button type="submit">Mostrar titular</button>
    </form>

    <hr>

    <h2>Titulares:</h2>

    <?php
    if ($tipoGuardado === null) {
        foreach ($tiposTitulares as $titular) {
            echo "<p>$titular</p>";
        }
    } else {
        echo "<p>" . $tiposTitulares[$tipoGuardado] . "</p>";
    }
    ?>

    <hr>

    <a href="borrar_cookie.php">Borrar selección de titular</a>
</body>
</html>