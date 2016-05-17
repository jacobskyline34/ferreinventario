<!DOCTYPE html>
<html>
<head>
	<title>Proveedor Registrado</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
<h1>Proveedor Registrado</h1>
<a href="inicio.php"><h2>Inicio</h2></a> &raquo; Proveedor registrado


<div id="mensajes">
	<?php

require_once("conector.php");

if (isset($_POST["registrado"])) {
	
	$codigo=$_POST["codigo"];
	$nombre=$_POST["nombre"];
	$comentario=$_POST["comentario"];
	

	$insertar="INSERT INTO tb_proveedores (id_Proveedores,nombre_tb_provedores,Comentarios) VALUES ('$codigo','$nombre','$comentario')";
	mysql_query($insertar);
	echo "<p>Proveedor registrado con exito <a href='agregarproveedor.php'>Volver</a></p>";
} else {
	echo "Olvidó pasar por el <a href='agregarproveedor.php'>formulario</a>";
}
?>
</div>


</body>
</html>