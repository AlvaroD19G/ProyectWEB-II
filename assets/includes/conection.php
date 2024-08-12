<?php
$servidor = "localhost";
$usuario = "root";
$pass = "";
$bd = "";
$conex = mysqli_connect($servidor, $usuario, $pass, $bd);
mysqli_query($conex, "SET NAMES 'UTF8'");
if ($conex) {
    echo "The conection is already";
}
?>