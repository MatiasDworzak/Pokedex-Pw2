<?php
include "Database.php";
$conexion = mysqli_connect("localhost", "root", "", "pokedex");

$config = parse_ini_file("config.ini");

//conexion

$database = new Mysqli(
    $config["host"],
    $config["user"],
    $config["pass"],
    $config["db"],
);

if (!$conexion) {
die("Error al conectar: " . mysqli_connect_error());
}
if ($conexion) {
    echo "¡Conexión exitosa!";
}

$db = new Database();
?>