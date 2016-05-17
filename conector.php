<?php

define("SERVIDOR", "localhost");
define("USUARIO", "roott");
define("CLAVE", "corona");
define("BASE", "mydb");

$conexion=mysql_connect(SERVIDOR,USUARIO,CLAVE);
mysql_query("SET NAME 'utf8'");
$base=mysql_select_db(BASE);

?>