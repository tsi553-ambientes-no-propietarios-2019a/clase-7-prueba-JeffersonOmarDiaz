<?
echo 'Registrar nueva tienda';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tienda</title>
</head>
<body>
<h1 align= "center">REGISTRO DE TIENDA</h1>
<form action="validarTienda.php" method = "post">
<div>
<label>Nombre de la Tienda: </label>
<input type="text" name="tiendaName" required="required">
</div>
<div>
<label>Usuario: </label>
<input type="text" name="userName" required="required">
</div>
<div>
<label>Contraseña: </label>
<input type="password" name="password" required="required">
</div>
<div>
<label>Repetir Contraseña: </label>
<input type="password" name="checkPass" required="required">
</div>
<button>Aceptar</button>
</form>
</body>
</html>