<?php
include("conexion.php");

$query = "SELECT * FROM Ciudades";
$resultado = mysqli_query($link, $query) or die("Consulta fallida: " . mysqli_error($link));

echo "<table border='1'>";
echo "<tr><th>id</th><th>ciudad</th><th>país</th><th>habitantes</th><th>superficie</th><th>tieneMetro</th></tr>";

while ($fila = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>{$fila['id']}</td>";
    echo "<td>{$fila['ciudad']}</td>";
    echo "<td>{$fila['pais']}</td>";
    echo "<td>{$fila['habitantes']}</td>";
    echo "<td>{$fila['superficie']}</td>";
    echo "<td>{$fila['tieneMetro']}</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_free_result($resultado);
mysqli_close($link);
?>