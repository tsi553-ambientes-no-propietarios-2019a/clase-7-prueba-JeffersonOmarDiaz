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
/*if ($_SERVER['SCRIPT_NAME'] != '/index.php' && $_SERVER['SCRIPT_NAME'] != '/verificaDatos.php' && !isset($_SESSION['userName'])) {
	redirect($_SERVER["HTTP_HOST"] . '/index.php');
} elseif( $_SERVER['SCRIPT_NAME'] == '/index.php' && isset($_SESSION['userName']) ) {

	redirect($_SERVER["HTTP_HOST"] . 'inicio.php');
}*/
/*echo '</br>lo encontrado en scripname necesito es :',$_SERVER['SCRIPT_NAME'];
echo '</br>lo encontrado en http que necesito es :',$_SERVER['HTTP_HOST'];
echo '</br>',var_dump ($_SESSION['usuarios']);*/



?>