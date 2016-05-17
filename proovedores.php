<!DOCTYPE html>
<<html>
<head>
	<title>FERRETERIA BANUS</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

				<header><h1>Ferreteria Banus</h1></header>
                <header><h2>Provedores</h2></header>


<header>
	   <div id="cabecera">
		
			
			<ul>
				<li><a href="agregarproveedor.php">Agregar</a></li>	
				<li><a href="eliminarprov.php">Eliminar</a></li>	
				<li><a href="editarproveedor.php">Editar</a></li>	
					
			</ul>
				
		</div>
    </header>

<section>
<article>

<center><h2>Lista de Proveedores</h2></center>


<div id="contenido">


<table>
	

	
		
	<div align='center'>  
   <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#0101DF' bordercolor='#FFFFFF'>    
    <tr>  
      <td width='150' style='font-weight: bold'>Codigo</td>  
      <td width='150' style='font-weight: bold'>Proveedor</td>  
      <td width='150' style='font-weight: bold'>Comentario</td> 
     
    </tr>  



		<?php
			require_once('conector.php');
			
			$query="SELECT * FROM tb_proveedores";
			$consulta = mysql_query($query);
			
			while($fila = mysql_fetch_array($consulta)){
				
				echo "
	<tr>
	  <td width='150'>".$fila['id_Proveedores']."</td>  
      <td width='150'>".$fila['nombre_tb_provedores']."</td>  
      <td width='150'>".$fila['Comentarios']."</td> 
        
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


   </div>
 </section>


   
    <footer>
    	<div id="pie">&copy; Derechos Reservados</div>
    </footer>

</div>
</body>
</html>