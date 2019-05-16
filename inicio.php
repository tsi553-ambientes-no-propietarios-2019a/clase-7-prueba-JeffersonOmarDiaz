<?php
//include("utils.php");


//consulta
$sql_extraer= "Select * from producto";
//como se almacena para obtener el resultado $result = mysqli_query($conexion,$conasulta);
$result = mysqli_query($conn,$sql_extraer);
$user = $_POST['userName'];

$sql_extrarNameTienda ="Select nombTienda from tienda
WHERE nombUser ='$user'";
$resulta = mysqli_query($conn,$sql_extrarNameTienda);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 align = "center">Productos disponibles</h1>
    <?php echo '<h2>Bienvenido ' .strtoupper($user),'</h2>';

    while($fila = mysqli_fetch_array($resulta)){
     echo '<h2>A la Tienda: ',$fila['nombTienda'],'</h2>'; 
    } ?>
    <table border="2px">
    <tr>

  <th>Código</th>
  <th>Nombre</th>
  <th>Tipo</th>
  <th>Cantidad en stock</th>
  <th>Precio</th>


</tr>
<tr>
<?php
while($fila = mysqli_fetch_array($result)){?>
    <tr>
    <td> <?php echo $fila['codigo_Pro']; ?></td>
    <td> <?php echo $fila['nombPro']; ?> </td> 
    <td> <?php echo $fila['tipoPro']; ?></td> 
    <td> <?php echo $fila['cantidadPro']; ?></td>
    <td> <?php echo $fila['precioPro']; ?></td>
    </br>
    </tr>
    
<?php } ?>
</tr>
    </table>
    <a href="nuevo_producto.php">Registrar Nuevo Producto</a>
</body>
</html>