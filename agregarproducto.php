<!DOCTYPE html>
<html>
<head>
	<title>FERRETERIA BANUS</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

				<header><h1>Ferreteria Banus</h1></header>
                <header><h2>Agregar productos</h2></header>


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

<h1>Registro de producto</h1>


<form action="productoregistrado.php" method="POST">
<center>
<fieldset>
<h1>
	<table border="1">
	<tr>
	<td width="104">Codigo:</td>
	<td width="104"><input type="number" name="codigo" required /></td>	</tr>
	
<tr>	
	<td width="104">Nombre:</td>
	<td width="104"><input type="text" name="nombre" required /></td></tr> 
	
	<tr>
	<td width="104">Comentario:</td>
	<td width="104"><input type="text" name="comentario" required/></td></tr> 
	
	<tr>
	<td width="104">Precio:</td>
	<td width="104"><input type="number" name="precio" required/></td></tr> 
	
	<tr>
	<td width="104">Cantidad:</td>
	<td width="104"><input type="number" name="cantidad" required /></td> </tr>
	
	<tr>
	<td width="104">Proveedor:</td>
	<td width="104"><input type="Text" name="proveedor" required /></td></tr>
	
	<tr>
	<td width="104">Codigo de proveedor:</td>
	<td width="104"><input type="number" name="idproveedor" required /></td> </tr>
	


	

</table>
<br>
	<input type="submit" name="registrado" value="Registrar" />
	</fieldset>
</center>



</form>
</div>


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

</div>
  
    </section>
    
    <footer>
    	<div id="pie">&copy; Derechos Reservados</div>
    </footer>


</body>
</html>