<?php
session_start();

/*function redirect($url){
    header('Location: '.$url);
    exit;
}*/

$conn = new mysqli('localhost','root','','pruebab1');

if($conn->connect_error){
    echo 'se pridujo un error antes de concetar ';
    exit;
}//else{
    //echo 'conexion exitosa';
//}

?>