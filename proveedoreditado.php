<!DOCTYPE html>
<html>
<head>
	<title>Cliente modificado</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
</head>
<body>
<h1>Proveedor modificado</h1>
<a href="proveedores.php">prov</a> &raquo; Proveedor modificado

<?php
require_once("conector.php");
if (isset($_POST["modificar"])) {
	$codigo=$_POST["codigo"];
	$nombre=$_POST["nombre"];
	$comentario=$_POST["comentario"];
	$modificar="UPDATE tb_proveedores SET nombre='{$nombre}', Comentarios='{$comentario}', WHERE id_Proveedores='{$codigo}'";
    $res= mysql_query($modificar);
    if(!$res){
        echo mysql_error();
    }
	/* echo "<p>Proveedor modificado con éxito <a href='proovedores.php'>Volver</a></p>";
} else {
	echo "<p>Olvido pasar por la <a href='editarproveedor.php'>lista de proveedores</a></p>";*/
}
?>
    <script type="text/javascript">
            setTimeout("location.href = 'proveedores.php';", 200);
    </script>
</body>
</html>