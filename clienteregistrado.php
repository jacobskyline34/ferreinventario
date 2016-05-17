<!DOCTYPE html>
<html>
<head>
	<title>Cliente Registrado</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
<div id="mensajes">
<h1>Cliente Registrado</h1>
<a href="inicio.php"><h2>Inicio</h2></a> &raquo; Cliente registrado

<?php

require_once("conector.php");

if (isset($_POST["registrado"])) {
	
	$codigo=$_POST["codigo"];
	$nombre=$_POST["nombre"];
	$telefono=$_POST["telefono"];
	

	$insertar="INSERT INTO tb_cliente (idtb_cliente,nombre_tb_cliente,numcel_tb_cliente) VALUES ('$codigo','$nombre','$telefono')";
	mysql_query($insertar);
	echo "<p>Cliente registrado con éxito <a href='agregarcliente.php'>Volver</a></p>";
} else {
	echo "Olvidó pasar por el <a href='agregarcliente.php'>formulario</a>";
}
?>

</div>
</body>
</html>