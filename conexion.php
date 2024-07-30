<?php
$servidor="localhost";
$usuario="root";
$password="";
$BD="reserva";
$port=3306;

$enlace = mysqli_connect($servidor, $usuario, $password, $BD,$port);


if (!$enlace){
    die("Conexion fallo: ". mysqli_connect_error());
}else{
    echo "Conexion con exito";
}

?>