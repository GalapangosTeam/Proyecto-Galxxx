<?php 
	$conexion=mysql_connect("localhost","root","Skytop002");
	if (!$conexion){
		echo "No se pudo conectar con la base datos";
	}else{
		echo "Se realizo la conexion";
		mysql_select_db("bdgalmus",$conexion);
	}
?>