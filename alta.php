<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

    $query = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro) 
              VALUES ('$ciudad', '$pais', $habitantes, $superficie, $tieneMetro)";
    
    mysqli_query($link, $query) or die("Error al insertar: " . mysqli_error($link));
    echo "Ciudad agregada exitosamente.";
    mysqli_close($link);
}
?>

<form method="post">
    Ciudad: <input type="text" name="ciudad"><br>
    País: <input type="text" name="pais"><br>
    Habitantes: <input type="number" name="habitantes"><br>
    Superficie: <input type="text" name="superficie"><br>
    Tiene Metro: <input type="checkbox" name="tieneMetro" value="1"><br>
    <input type="submit" value="Agregar ciudad">
</form>