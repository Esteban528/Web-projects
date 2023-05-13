<?php declare(strict_types=1); // El tipado será mas estricto
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function obtenerServicios() : array
{

    try {
        // Importar una conexion
        require 'database.php';

        // Escribir un codigo SQL

        $sql = "SELECT * FROM servicios;";

        $consulta = mysqli_query($db, $sql);

        // Arreglo vacío

        $servicios = [];
        $i = 0;
        // Obetener resultados

        while($row = mysqli_fetch_assoc($consulta)) {
            // $servicios[$i] = $row;
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];

            $i++;
        }

        return $servicios;
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}

obtenerServicios();