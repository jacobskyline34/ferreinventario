<!DOCTYPE html>
<html>
<head>
	<title>Producto registrado</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<h1>Registrado con exito!</h1>
<a href="inicio.php">Inicio</a> &raquo; Producto Registrado

<div id="mensajes">
<?php
require_once("conector.php");
if (isset($_POST["registrado"])) {
	
	$codigo=$_POST["codigo"];
	$nombre=$_POST["nombre"];
	$comentario=$_POST["comentario"];
	$precio=$_POST["precio"];
	$cantidad=$_POST["cantidad"];
	$proveedor=$_POST["proveedor"];
	$idproveedor=$_POST["idproveedor"];


	$insertar="INSERT INTO tb_productos(idtb_productos,nombre_tb_producto,comentario_tb_producto,tb_costo,tb_cantidad,nombre_tb_provedor,tb_Proveedores_id_Proveedores) VALUES ('$codigo','$nombre','$comentario','$precio','$cantidad','$proveedor','$idproveedor')";
	mysql_query($insertar);
	echo "<p>Producto registrado con éxito <a href='agregarproducto.php'>Volver</a></p>";
} else {
	echo "Olvidó pasar por el <a href='agregarproducto.php'>formulario</a>";
}
?>

</div>


</body>
</html>