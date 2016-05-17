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

$clave = $_POST['codigo'];

mysqli_query($conexion, "DELETE from tb_productos where idtb_poductos= '$clave', tb_Proveedores_id_Proveedores ='$clave'")
	
or die("<br><h1>ERROR::</h1>");

mysqli_close($conexion);
echo "<p>Eliminado con exito <a href='eliminarproducto.php'><h2>Volver</h2></a></p>";



?>
</div>


</body>
</html>