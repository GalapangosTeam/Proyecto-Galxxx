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

//primero validar que no exista el mismo usuario, con el correo y contraseña
funcion validarExiste($existe){
	//verificamos si el user exite con un condicional
	if(mysql_num_rows($existe) == 0){
		// mysql_num_rows <- esta funcion me imprime el numero de registro que encontro 
		// si el numero es igual a 0 es porque el registro no exite, en otras palabras ese user no esta en la tabla admins por lo tanto se puede registrar.
		echo "el user es valido";
		insertarAdmins();
	}
	else{
		//caso contario (else) es porque ese user ya esta registrado
		echo 'este usuario ya esta registrado';
	}
}

$existe_mismo = "SELECT * FROM admingal WHERE correo='$correo'";

validarExiste($existe_mismo);

funcion insertarAdmins(){
	$insertar_admins = "INSERT INTO admingal(id_user,nombres,appat,apmat,correo,contra,fecha_nac,tel,genero_sex,estado,validacion) VALUES (0,'$nombres','$apellidopat','$apellidomat','$correo','$contra','$fecha','$tel','$sex','offline',0)";
	$conexion->query($insertar_admins);
}''
?>