<?php
require('abrir_conexion.php'); // Se agrega un objeto que manda a llamar ese script, y no seguira corriendo hasta que este ese script.

$nombres =!empty($_REQUEST['nombres'])?$_REQUEST['nombres']:'';//validar que si tenga algo esa variable.
$apellidopat =!empty($_REQUEST['apellidopat'])?$_REQUEST['apellidopat']:'';
$apellidomat =!empty($_REQUEST['apellidomat'])?$_REQUEST['apellidomat']:'';
$correo =!empty($_REQUEST['correo'])?$_REQUEST['correo']:'';
$contra =!empty($_REQUEST['contrasena'])?$_REQUEST['contrasena']:'';
$fecha =!empty($_REQUEST['fecha'])?$_REQUEST['fecha']:'';
$tel =!empty($_REQUEST['tel'])?$_REQUEST['tel']:'';
$sex =!empty($_REQUEST['sex'])?$_REQUEST['sex']:'';
$ocupacion =!empty($_REQUEST['ocupacion'])?$_REQUEST['ocupacion']:'';
$edad =!empty($_REQUEST['edad'])?$_REQUEST['edad']:'';


$insertar_Usuarios = "INSERT INTO $tbl2 (id_user,nombres,appat,apmat,correo,contra,fecha_nac,tel,genero_sex,ocupacion,edad,estado) VALUES (0,'$nombres','$apellidopat','$apellidomat','$correo','$contra','$fecha','$tel','$sex','$ocupacion',$edad,'offline')";
$conexion->query($insertar_Usuarios);
?>