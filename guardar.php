<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre']) && isset($_POST['clave'])) {
    $_SESSION['usuario'] = $_POST['nombre'];
    $_SESSION['clave'] = $_POST['clave'];

    header("Location: ver_sesion.php");
    exit;
} else {
    echo "No se recibieron correctamente los datos.";
}