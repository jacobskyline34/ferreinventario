<!DOCTYPE html>
<<html>
<head>
	<title>FERRETERIA BANUS</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

				<header><h1>Ferreteria Banus</h1></header>
                <header><h2>Agregar proveedor</h2></header>


<header>
	   <div id="cabecera">
		
			
			<ul>
				
				<li><a href="">Eliminar</a></li>	
				<li><a href="">Editar</a></li>	
					
			</ul>
				
		</div>
    </header>



<section>





	<div id="contenido">

<h1>Registro de proveedor</h1>


<form action="proveedoreditado.php" method="POST">
<center>
<fieldset>

	<table border="1"></table>
	<tr>
	<td width="104">codigo:</td>
	<td width="504"><input type="number" name="codigo" required /></td>	</tr>
	
<tr>
	<td width="104">nombre</td>
	<td width="104"><input type="text" name="nombre" required /></td> </tr>
	
	<tr>
	<td width="104">comentario</td>
	<td width="104"><input type="text" name="comentario" required/><td> </tr>
	
	

	<input type="submit" name="modificar" value="Registrar" />


	</div>

	</fieldset>
</center>


</form>


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