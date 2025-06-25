<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Usuario</title>
</head>
<body>
    <h1>Ingreso de Cliente</h1>
    <form action="guardar.php" method="post">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="clave">Clave:</label>
        <input type="password" id="clave" name="clave" required><br><br>

        <button type="submit">Guardar datos</button>
    </form>
</body>
</html>