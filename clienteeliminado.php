<!DOCTYPE html>
<html>
<head>
	<title>eliminar</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
</head>
<body>
<div id="mensajes">
<?php

$server = "localhost";
$usuario = "roott";
$contraseña = "corona";
$bd = "mydb";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)

or die ("ERROR conexion");

$clave = $_POST['id'];

mysqli_query($conexion, "DELETE from tb_cliente where idtb_cliente= '$clave'")
	
or die("<br><h1>ERROR::</h1>");

mysqli_close($conexion);
echo "<p>Eliminado con exito <a href='eliminarcliente.php'><h2>Volver</h2></a></p>";



?>
</div>


</body>
</html>