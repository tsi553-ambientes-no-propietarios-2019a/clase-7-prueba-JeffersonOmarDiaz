<?php

include('utils.php');

if($_POST){
    if(isset($_POST['userName']) && isset($_POST['password']) && 
    !empty($_POST['userName']) && !empty($_POST['userName'])){
        //echo 'datos completos';

       $user= $_POST['userName'];
       $passwor = $_POST['password'];

       $sql_extraer = "SELECT * FROM tienda
       WHERE nombUser = '$user' 
       AND password = MD5('$passwor')";

       $res = $conn->query($sql_extraer);

       if($conn->error){
        redirect('index.php?error_message=Ocurrió un error: ' . $conn->error);
       }

       if($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $_SESSION['usuarios'] = [
                'userName' => $row['nombUser'],
                'id' => $row['idUser']
            ];
            //echo '</br>datos de usuario' ,$user;
            //echo '</br>datos de usuario clave' ,$passwor;
            //echo '</br>los datos son validos';
            
            include('inicio.php');
        }
        } else {
            //echo '</br>datos de usuario' ,$user;
            //echo '</br>datos de usuario clave' ,$passwor;
            echo '<h2></br> clave o usuario incorrectos!!</h2>';
            include('index.php');
            //redirect('index.php?error_message=Usuario o clave incorrectos!');
            
        }
        
    }else{
        echo 'llene todos los datos por favor';
        include('index.php');
    }
}

?>