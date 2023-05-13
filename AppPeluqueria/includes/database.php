<?php declare(strict_types=1); // El tipado será mas estricto
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$db = mysqli_connect('localhost', 'root', 'esteban123', 'aprendiendo', 3306,);

if (!$db) {
    echo "Error en la conexion";
    exit;
}
// echo "Conexion Correcta <br>";
