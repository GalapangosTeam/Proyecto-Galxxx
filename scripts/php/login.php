<?php  
session_start();
require('abrir_conexion.php');

//variables de los campos a recibir.
$correo =!empty($_REQUEST['correo'])?$_REQUEST['correo']:'';
$contra =!empty($_REQUEST['contrasena'])?$_REQUEST['contrasena']:'';

validarExisteUsuario($correo,$contra);

function validarExisteUsuario($correo,$contra){

	include('abrir_conexion.php');
	//para tabla admin
	$buscarCorreo_1 = "SELECT * FROM $tbl1 WHERE correo='$correo' AND contra='$contra'";
	$resultado_1 = $conexion->query($buscarCorreo_1);

	//para tabla usuarios generales
	$buscarCorreo_2 = "SELECT * FROM $tbl2 WHERE correo='$correo' AND contra='$contra'";
	$resultado_2 = $conexion->query($buscarCorreo_2);

		//Usaremos la funcion mysqli_num_rows en la consulta $resultado,
        //esta funcion nos regresa el numero de filas en el resultado
        $tabladmin = mysqli_num_rows($resultado_1);
        $tablausuarios = mysqli_num_rows($resultado_2);

        //primero validamos que el correo exista en tabla de administradores.
        if($tabladmin == 1) {//si existe
            echo 'Este administrador existe';
            //entonces que inicie sesion
            iniciarSesionAdmin($resultado_1,$contra);
        }else if($tablausuarios == 1) {
        	echo 'Este usuario existe';
            //entonces que inicie sesion
            iniciarSesionUsuario($resultado_2,$contra);
        }else{
        	echo 'El usuario y/o correo no existen.'; // se puede registrar el usuario.
        	header('Localtion ');
         	include('cerrar_conexion.php');
        }
}

function inciarSesionAdmin($result,$password){

	$row = $result->fetch_array(MYSQLI_ASSOC);//consulta para sacar datos de la bd y pasarlos a array

	//La función password_verify(); lo que hace es descifrar el hash en la base de datos para compararlo con el password entrado en el formulario y verificar que sean iguales.
 if (password_verify($password, $row['contra'])) { 
    $_SESSION['loggedin'] = true;
    $_SESSION['nombres'] = $nombres;
    $_SESSION['apellidopat'] = $appat;
    $_SESSION['apellidomat'] = $apmat;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60); // tiempo para expirar por inactividad
    echo "¡Bienvenido!"." $_SESSION['nombres']".", $_SESSION['apellidopat']"."$_SESSION['apellidomat']";
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 

 } else { 
	echo "Username o Password estan incorrectos.";
	echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }

}

function iniciarSesionUsuario(){

}

?>