<?php
$usuario = $_POST["username"];
$contraseña = $_POST["pwd"];


if ($usuario == "admin" && $contraseña == "1234") {
    $fecha = date('Y-m-d H:i:s');
    file_put_contents('fecha.txt', $fecha);
    //almacenamos fecha en un archivo externo para que sea CONSTANTE a la hora de navegar en distintos scripts de php; 
    header("Location: ./principal.html");
} else {
    // Redirigir a la página de inicio de sesión con un mensaje de error
    header('Location:./Login.html?error=1');
}
?>
