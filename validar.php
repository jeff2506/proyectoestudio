<?php

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$conexion = mysqli_connect('localhost', 'root', '','Registro');
$consulta = "select * from usuarios where nombre_usuario = '$usuario' and contraseña = '$contraseña' ";
$ejecutar = mysqli_query($conexion,$consulta);

$N_Resultado = mysqli_num_rows($ejecutar);

if($N_Resultado > 0)
{
   header('location:pagina-principal.html');
}
else{

    echo('hay un error');
}



mysqli_free_result($ejecutar);
mysqli_close($conexion);