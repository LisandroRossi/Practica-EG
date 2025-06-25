<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

    $query = "UPDATE Ciudades SET ciudad='$ciudad', pais='$pais', habitantes=$habitantes,
              superficie=$superficie, tieneMetro=$tieneMetro WHERE id=$id";

    mysqli_query($link, $query) or die("Error al modificar: " . mysqli_error($link));
    echo "Ciudad modificada.";
    mysqli_close($link);
}
?>

<form method="post">
    ID a modificar: <input type="number" name="id"><br>
    Nueva ciudad: <input type="text" name="ciudad"><br>
    Nuevo país: <input type="text" name="pais"><br>
    Nuevos habitantes: <input type="number" name="habitantes"><br>
    Nueva superficie: <input type="text" name="superficie"><br>
    Tiene Metro: <input type="checkbox" name="tieneMetro" value="1"><br>
    <input type="submit" value="Modificar ciudad">
</form>