<!DOCTYPE html>
<html>
<head>
	<title>FERRETERIA BANUS</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

				<header><h1>Ferreteria Banus</h1></header>
                <header><h2>Clientes</h2></header>


<header>
	   <div id="cabecera">
		
			
			<ul>
				<li><a href="agregarcliente.php">Agregar</a></li>		
				<li><a href="">Editar</a></li>	
					
			</ul>
				
		</div>
    </header>

    
<section>
<article>
	<br>
	
<form action="clienteeliminado.php" method="POST">
<center>
Clave: <input type="number" name="id">
<input type="submit" value"eliminarcliente" name"eliminar"></br>



<div id="contenido">


<table>
	
	</thead>
	<tbody>
		
	<div align='center'>  
   <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#0101DF' bordercolor='#FFFFFF'>    
    <tr>  
      <td width='150' style='font-weight: bold'>Codigo</td>  
      <td width='150' style='font-weight: bold'>Nombre</td>  
      <td width='150' style='font-weight: bold'>Telefono</td>     
    </tr>  



		<?php
			require_once('conector.php');
			
			$query="SELECT * FROM tb_cliente";
			$consulta = mysql_query($query);
			
			while($fila = mysql_fetch_array($consulta)){
				
				echo "
	 <tr>
	  <td width='100'>".$fila['idtb_cliente']."</td>  
      <td width='100'>".$fila['nombre_tb_cliente']."</td>  
      <td width='100'>".$fila['numcel_tb_cliente']."</td>  
     </tr>

				";
			}
		?> 
</div>

</table>

</article> 


<nav>
<div id="Informacion">
        		<h2 id="look">Sistema</h2>

		<u1>
		<li><a href="inicio.php">Inicio</a></li><br>
			<li><a href="proovedores.php">Proveedores</a></li><br>
		    <li><a href="productos.php">Productos</a></li><br>
		    <li><a href="clientes.php">Clientes</a></li><br>
		    <li><a href="ventas.php">Ventas</a></li><br>
		    <li><a href="usuarios.php">Usuarios</a></li><br>
		 
		</u1>
	</div>
  </nav>
    </section>



    <footer>
    	<div id="pie">&copy; Derechos Reservados</div>
    </footer>


</body>
</html>