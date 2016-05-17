<?php


$name = $_POST['nombre'];

$pass = $_POST['password'];


if(empty($name) || empty($pass)){
	header("Location: index.html");
	exit();
}

mysql_connect('localhost','roott','corona') or die("Error al conectar " . mysql_error());
mysql_select_db('mydb') or die ("Error al seleccionar la Base de datos: " . mysql_error());
 
$result = mysql_query("SELECT * from tb_admin where nombre_tb_admin='" . $name . "'");
 
if($row = mysql_fetch_array($result)){
if($row['password'] == $pass){
session_start();
$_SESSION['nombre_tb_admin'] = $name;
header("Location: inicio.php");
}else{
header("Location: index.html");
exit();
}
}else{
header("Location: index.html");
exit();
}

?>