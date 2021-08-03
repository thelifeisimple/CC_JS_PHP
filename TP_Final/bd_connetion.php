<?php

echo"<hr>";
echo "conectar a la base de datos";

$conexion_bd_dd = mysqli_connect("localhost","id17352943_root","fhttm9qRa?CP3XQ","id17352943_diperdeal");

echo "<hr>";
if(mysqli_connect_errno()){
    echo "Error";
}
else{
    echo "Se conecto";
    return true;
}

// $consulta_usuario = mysqli_query($conexion_bd_dd, "select * from usuario");

// echo "<pre>";
// var_dump($consulta_usuario);
// echo "<pre>";


?>