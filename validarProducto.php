<?php
include('utils.php');

if ($_POST) {
    if(isset($_POST['codigo']) && isset($_POST['nombPro']) && isset($_POST['tipo']) && isset($_POST['cantidad']) && isset($_POST['precio']) &&
    !empty($_POST['codigo']) && !empty($_POST['nombPro']) && !empty($_POST['tipo']) && !empty($_POST['cantidad']) && !empty($_POST['precio'])){

        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombPro'];
        $tipo = $_POST['tipo'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        //echo 'Validando los datos';
  
            //echo '</br>las claves coinciden';

            $sql_insert = "INSERT INTO producto
            (codigo_Pro, nombPro, tipoPro, cantidadPro, precioPro)
            VALUES ('$codigo','$nombre','$tipo','$cantidad','$precio')";

            $conn->query($sql_insert);

            if($conn->error){
                echo 'Hubo un error al registrar los datos en la base tipo de error ' .$conn->error;
            exit;
            }else{
                echo '</br>REGISTRO EXITOSO ',$_POST['userName'];
                //session_abort();
                include('inicio.php');
            }
    }
}else{
    echo 'los datos no estan completos';
}
?>