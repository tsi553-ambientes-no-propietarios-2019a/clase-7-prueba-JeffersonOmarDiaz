<?php
include('utils.php');

if ($_POST) {
    if(isset($_POST['tiendaName']) && isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['checkPass']) &&
    !empty($_POST['tiendaName']) && !empty($_POST['userName']) && !empty($_POST['password']) && !empty($_POST['checkPass'])){

        $nomtienda=$_POST['tiendaName'];
        $user= $_POST['userName'];
        $clave= MD5($_POST['password']);
        $checkClave= MD5($_POST['checkPass']);
        //echo 'Validando los datos';
        if($clave===$checkClave){
            //echo '</br>las claves coinciden';

            $sql_insert = "INSERT INTO tienda
            (nombTienda, nombUser, password)
            VALUES ('$nomtienda','$user','$clave')";

            $conn->query($sql_insert);

            if($conn->error){
                echo 'Hubo un error al registrar los datos en la base tipo de error ' .$conn->error;
            exit;
            }else{
                echo '</br>REGISTRO EXITOSO, Puede INICIAR SESIÒN';
                include('index.php');
            }

        }else{
            include('registro_tienda.php');
            echo '<h2>Las contraseñas no coinciden!!</h2>';
            //redirect('registro_tienda.php?error_message=Las claves no coinciden!');
        }
    }
}else{
    echo 'los datos no estan completos';
}

?>