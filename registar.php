<?php

include ("validar.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$conexion = mysqli_connect('localhost', 'root', '','Registro');

$insetar = "insert into usuarios (nombre_usuario, contraseña) values ('$usuario','$contraseña')";
$ejecutar = mysqli_query($conexion,$insetar);

if($ejecutar)
{
    echo "registrado";
    header('location:pagina_principal.html');
}
else
{
    echo"error";
}


mysqli_free_result($ejecutar);
mysqli_close($conexion);