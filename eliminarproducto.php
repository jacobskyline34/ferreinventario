<!DOCTYPE html>
<html>
<head>
	<title>FERRETERIA BANUS</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

				<header><h1>Ferreteria Banus</h1></header>
                <header><h2>Productos</h2></header>

<section>
<article>
<header>
	   <div id="cabecera">
		
			
			<ul>
				<li><a href="agregarproducto.php">Agregar</a></li>		
				<li><a href="">Editar</a></li>	
					
			</ul>
				
		</div>
    </header>

<section>
	<article>






<div id="contenido">


<form action="productoeliminado.php" method="POST">
<center>
Clave: <input type="number" name="codigo">
<input type="submit" value"eliminarproducto" name"eliminar"></br>



<table>
	
	</thead>
	<tbody>
		
	<div align='center'>  
   <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#0101DF' bordercolor='#FFFFFF'>    
    <tr>  
      <td width='150' style='font-weight: bold'>Codigo</td>  
      <td width='150' style='font-weight: bold'>Nombre</td>  
      <td width='150' style='font-weight: bold'>Comentario</td>   
      <td width='150' style='font-weight: bold'>Costo</td>  
      <td width='150' style='font-weight: bold'>Cantidad</td>  
      <td width='150' style='font-weight: bold'>Nombre proveedor</td> 
      <td width='150' style='font-weight: bold'>Id proveedor</td>
    </tr>  




		<?php
			require_once('conector.php');
			
			$query="SELECT * FROM tb_productos";
			$consulta = mysql_query($query);
			
			while($fila = mysql_fetch_array($consulta)){
				
				echo "
	  <tr>
	  <td width='50'>".$fila['idtb_productos']."</td>  
      <td width='50'>".$fila['nombre_tb_producto']."</td>  
      <td width='50'>".$fila['comentario_tb_producto']."</td>  
      <td width='50'>".$fila['tb_costo']."</td>
      <td width='50'>".$fila['tb_cantidad']."</td>
      <td width='50'>".$fila['nombre_tb_provedor']."</td>
      <td width='50'>".$fila['tb_Proveedores_id_Proveedores']."</td>
      </tr>  



				";
			} 
		?> 


</table> </div>
</article>
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


  </div></div>
    </section>
    
    <footer>
    	<div id="pie">&copy; Derechos Reservados</div>
    </footer>


</body>
</html>