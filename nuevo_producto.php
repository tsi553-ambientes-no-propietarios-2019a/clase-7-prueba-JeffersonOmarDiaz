<?php
//include('utils.php');


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
    <form action="validarProducto.php" method ="post">
    <h1 align ="center">Registro de Producto</h1>
    <div>
    <label>Còdigo: </label>
    <input type="text" name="codigo" required="required">
    </div>
    <div>
    <label>Nombre: </label>
    <input type="text" name="nombPro" required="required">
    </div>
    <div>
    <label>Tipo: </label>
    <input type="text" name="tipo" required="required">
    </div>
    <div>
    <label>Cantidad: </label>
    <input type="text" name="cantidad" required="required">
    </div>
    <div>
    <label>Precio: </label>
    <input type="text" name="precio" required="required">
    </div>
    <button>Registrar</button>
    </form>
</body>
</html>