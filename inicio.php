
<?php
 
session_start();
 
if(isset($_SESSION['id_tb_admin'])){

	$sesion = true;

}else{
	$sesion = false;
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>FERRETERIA BANUS</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<div id="mensajes">

<?php if ($sesion) : ?> 
	Bienvenido <?= $_SESSION['nombre_tb_admin'] ?>.
<br/>	
<br/>
<a href="logout.php">CERRAR SESION</a>
<?php else : ?> <a href="index.html"><h4>CERRAR SESION</h4></a>
<?php endif; ?>




</div>










				<header><h1>Ferreteria Banus</h1></header>
                <header><h2>Sistema de Inventrio</h2></header>
                <header><h2>INICIO</h2></header>

<div id="Informacion">
        		<h2 id="look">Sistema</h2>
<nav>
		<u1>
			
			<li><a href="inicio.php">Inicio</a></li><br>
			<li><a href="proovedores.php">Proveedores</a></li><br>
		    <li><a href="productos.php">Productos</a></li><br>
		    <li><a href="clientes.php">Clientes</a></li><br>
		    <li><a href="ventas.php">Ventas</a></li><br>
		    <li><a href="usuarios.php">Usuarios</a></li><br>
		 
		</u1>
	
  </nav>
    </section>
    



    <footer>
    	<div id="pie">&copy; Derechos Reservados</div>
    </footer>


</body>
</html>