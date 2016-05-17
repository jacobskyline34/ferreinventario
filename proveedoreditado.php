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
<<<<<<< HEAD
    }
=======
    };
>>>>>>> 05e72b9135cf4b34fe04eb8660d4c86bc9ab1ab6
	/* echo "<p>Proveedor modificado con éxito <a href='proovedores.php'>Volver</a></p>";
} else {
	echo "<p>Olvido pasar por la <a href='editarproveedor.php'>lista de proveedores</a></p>";*/
}
?>
    <script type="text/javascript">
<<<<<<< HEAD
            setTimeout("location.href = 'proveedores.php';", 200);
=======
            setTimeout("location.href = 'proovedores.php';", 1500);
>>>>>>> 05e72b9135cf4b34fe04eb8660d4c86bc9ab1ab6
    </script>
</body>
</html>
