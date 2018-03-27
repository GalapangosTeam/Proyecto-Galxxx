<?php  
session_start();
require('abrir_conexion.php');

//variables de los campos a recibir.
$correo =!empty($_REQUEST['correo'])?$_REQUEST['correo']:'';
$contra =!empty($_REQUEST['contrasena'])?$_REQUEST['contrasena']:'';

validarExisteUsuario($correo,$contra);

function validarExisteUsuario($correo,$contra){

	include('abrir_conexion.php');
	//para tabla usuarios generales
	$buscarCorreo_2 = "SELECT * FROM $tbl2 WHERE correo='$correo' AND contra='$contra'";
	$resultado_2 = $conexion->query($buscarCorreo_2);

		//Usaremos la funcion mysqli_num_rows en la consulta $resultado,
        //esta funcion nos regresa el numero de filas en el resultado
        $tablausuarios = mysqli_num_rows($resultado_2);

        //primero validamos que el correo y contraseña existan en tabla de administradores.
        if($tablausuarios == 1) {//si existe
            echo 'Este administrador existe';
            //entonces que inicie sesion
            iniciarSesionAdmin($resultado_1,$contra);
        }else{
        	header("Localtion: ");// no existe en ninguno de los 2, se redirecciona a mostrar div con mensaje de error
        	mysqli_free_result($resultado);//liberamos memoria y recursos de la bd.
            mysqli_close();
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
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60); // tiempo para expirar por inactividad, 5 = minutos * 60 = segundos.

    //abra el indexx + los divs con sus caracteristicas de usuario
    header("Localtion:");
    echo "Usuario: ". $_SESSION['nombres'] .",".$_SESSION['apellidopat'].$_SESSION['apellidomat'];
    echo "<br><br><a href=indexx.html> Panel de Control</a>"; 

 } else { 
	echo "Username o Password estan incorrectos.";
	echo "<br><a href='indexx.html#id01'>Volver a Intentarlo</a>";
	include('cerrar_conexion.php');
 }
 	include('cerrar_conexion.php');
}

function iniciarSesionUsuario(){

}

// Funciones para encriptar y desencriptar las contraseñas.
function encriptar($cadena){
    $key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cadena, MCRYPT_MODE_CBC, md5(md5($key))));
    return $encrypted; //Devuelve el string encriptado
}
function desencriptar($cadena){
     $key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
     $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($cadena), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
    return $decrypted;  //Devuelve el string desencriptado
}


?>