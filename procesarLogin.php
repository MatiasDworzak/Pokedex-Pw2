<?php
require_once ("Database.php");
session_start();
//el de la clase
$database = new Database();
$array= $database->query("Select * FROM administrador Where id= 1");
$admin = $array[0];
$usuario_valido = $admin['username'];
$pass_valido = $admin['password'];
echo $usuario_valido;
echo $pass_valido;
//obtener datos del form

$usuario = isset($_POST['username']) ? $_POST['username'] : '';
$contrasenia = isset($_POST['password']) ? $_POST['password'] : '';


$_SESSION['admin'] = false;
if ($usuario === $usuario_valido && $contrasenia === $pass_valido) {
    $_SESSION['admin'] = true;
    header("Location: abm.php");
} else {
    $_SESSION['admin'] = false;
    header("Location:index.php");
}