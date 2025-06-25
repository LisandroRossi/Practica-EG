<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['estilo'])) {
    $estilo = $_POST['estilo'];
    setcookie("estilo_seleccionado", $estilo, time() + (86400 * 30), "/"); 
} else if (isset($_COOKIE["estilo_seleccionado"])) {
    $estilo = $_COOKIE["estilo_seleccionado"];
} else {
    $estilo = "estilo1-prac7.css"; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página con Estilos Configurables</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($estilo); ?>">
</head>
<body>
    <h1>Bienvenido a la página con estilo configurable</h1>
    
    <form action="index-prac7.php" method="post">
        <label for="estilo">Seleccione un estilo:</label>
        <select name="estilo" id="estilo">
            <option value="estilo1-prac7.css" <?php if ($estilo == "estilo1-prac7.css") echo "selected"; ?>>Claro</option>
            <option value="estilo2-prac7.css" <?php if ($estilo == "estilo2-prac7.css") echo "selected"; ?>>Oscuro</option>
            <option value="estilo3-prac7.css" <?php if ($estilo == "estilo3-prac7.css") echo "selected"; ?>>Turquesa</option>
        </select>
        <input type="submit" value="Aplicar estilo">
    </form>

    <p>Tu preferencia de estilo se guardará durante 30 días.</p>
</body>
</html>