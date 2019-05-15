

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio sesion</title>
</head>
<body>
<h1 align ="center">Inicio de Sesión</h1>
<form action="verificaDatos.php" method = "post">
<div>
<label>Usuario: </label>
<input type="text" name="userName" required="required">
</div>
<div>
<label>Clave: </label>
<input type="password" name="password" required="required">
</div>
<button>INGRESAR</button>
<div>
<a href="registro_tienda.php">Registrar Mi Tienda</a>
</div>
</form>
</body>
</html>