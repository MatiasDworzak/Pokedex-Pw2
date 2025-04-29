<?php

session_start();
//el de la clase

$usuario_valido = "admin";
$pass_valido = "1234";

//obtener datos del form

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$contrasenia = isset($_POST['contrasenia']) ? $_POST['contrasenia'] : '';

if ($usuario === $usuario_valido && $contrasenia === $pass_valido) {
    $_SESSION['usuario'] = $usuario;
    echo "Login exitoso. <a href='privado.php'>Ir al area privada</a>";
} else {
    echo "credencial incorrecta. <a href'inical.html'>Intentar de nuevo</a>";
}