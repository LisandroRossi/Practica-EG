<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $query = "DELETE FROM Ciudades WHERE id = $id";
    mysqli_query($link, $query) or die("Error al eliminar: " . mysqli_error($link));
    echo "Ciudad eliminada.";
    mysqli_close($link);
}
?>

<form method="post">
    Ingrese ID de la ciudad a eliminar: <input type="number" name="id">
    <input type="submit" value="Eliminar">
</form>