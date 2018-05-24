<?php
	session_start();

	if($_GET["logout"]==1 AND $_SESSION['id']) {session_destroy();
		$message = "You've been logged out, have a nice day";
	}

	//include("./dba/connection.php");

	//DB connection
	if( mysqli_connect_error()){
		echo mysqli_connect_error();
		die;//die "Could not connect to server";//mysqli_connect_error();
	}
	else{//If DB connection is succesful
		
		if ($_POST['registro']){
				die("<script>location.href = './registrado.html'</script>");
				$idcval=$_POST['idcval'];

				$qry_ins_fields = "INSERT INTO `idc_idvalidada`(`idc_validada`)";

				$qry_ins_values = "VALUES (1,'".$idcval."')";
			
				$query = $qry_ins_fields.$qry_ins_values;
				//mysqli_query($link, $query);
					if (mysqli_query($link, $query)) {
						$message = "IDC created";
						//die("<script>location.href = './registrado.html'</script>");//echo "New record created successfully";
					} else {
						//echo "Error: " . $query . "<br>" . mysqli_error($link);
						$error = "Error: " . $query . "<br>" . mysqli_error($link);
					}				

				//die("<script>location.href = './registrado.html'</script>");
		}
				/*
				$query2="SELECT idc FROM idc_identidad WHERE `curp` = '".$curp."'";
				$result = mysqli_query($link, $query2);

				$row = $result->fetch_assoc();
				if($row>0){
					$idc = $row['idc'];
				}

				//Crea la cadena de la identidad digital
				$idcValidada = creaIDCvalidada($curp);
				$qry_ins_fields = "INSERT INTO `idc_idvalidada`(`idc`, `idc_validada`)";
				$qry_ins_values = "VALUES (".$idc.", '".$idcValidada."')";

				$query1 = $qry_ins_fields.$qry_ins_values;
				mysqli_query($link, $query1);

				//$_SESSION['registrado'] = 1;
				//Crea una contraseña temporal
				$tempPwd = generateStrongpassword();//creaPwdtemporal($curp.$ap_paterno.$nombre);
				$query2 = "UPDATE `idc_identidad` SET pwd='".$tempPwd."' WHERE idc=".$idc;
				mysqli_query($link, $query2);

				enviarCorreo($ap_paterno, $nombre, $corr_elect, $idcValidada, $tempPwd);//($ap_paterno, $nombre, $email, $idcValidada, $tempPwd)

				die("<script>location.href = './registrado.html'</script>");////header("Location:maintratamientosmedicos_editar.php");
			}
			*/
			
	}//Submit

/*
function getIDC($curp){
	$query="SELECT idc FROM idc_identidad WHERE `curp` = '".$curp."'";
	$result = mysqli_query($link, $query);

	$row = $result->fetch_assoc();
	if($row>0){
		$idc = $row['idc'];
	}

	return $idc;
}
*/

class Password {
    const SALT = 'EstoEsUnSalt';
    public static function hash($password) {
        return hash('sha512', self::SALT . $password);
    }
    public static function verify($password, $hash) {
        return ($hash == self::hash($password));
    }
}

function creaIDCvalidada($curp){
	//usando https://diego.com.es/encriptacion-y-contrasenas-en-php
	// Crear la contraseña:
	return Password::hash($curp);
	/*
	// Comprobar la contraseña introducida
	if (Password::verify('micontraseña', $hash)) {
	    echo 'Contraseña correcta!\n';
	} else {
	    echo "Contraseña incorrecta!\n";
	}
	*/


}

function creaPwdtemporal($valor){
	return Password::hash($valor);
}

function generateStrongpassword(){
	/*
	****************************************
	* Based on http://codepad.org/UL8k4aYK *
	****************************************
	*/
	//$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
	$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%^";
	$pass = array(); //remember to declare $pass as an array
	$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	for ($i = 0; $i < 8; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $alphabet[$n];
	}
	return implode($pass); //turn the array into a string
}


function enviarCorreo($ap_paterno, $nombre, $email, $idcValidada, $tempPwd)
{
			$name=$nombre." ".$ap_paterno;//$_REQUEST['name'];
			$name2send="IDC por Synertech";//$_SESSION['nombre_usuario']." ".$_SESSION['ap_paterno']." (IDusuario ".$_SESSION['id'].")";
			//$email=$_SESSION['email'];//$_REQUEST['email'];
			$message="¡Felicidades ".$nombre." tu identidad digital ciudadana ha sido validada y es la siguiente:\n\n ";
			$message=$message."idc validada = ".$idcValidada."\n";
			$message=$message."contraseña temporal= ".$tempPwd."\n\n";
			$message=$message."Lo siguiente que hay que hacer es: \n\n";
			$message=$message."1. Acceder al portal IDC, iniciar sesión con tu correo electrónico y contraseña.\n";
			$message=$message."2. Modificar la contraseña temporal por una nueva que expira cada 6 meses.\n";
			$message=$message."3. ¡Listo! ya podrás acceder al sitio con tu usuario y contraseña generada para presentar tu IDC cuando lo necesites.\n\n";
			$message=$message."¡Nuevamente, muchas felicidades y muchas gracias!";

			$recipients = array(
			  $email,
				"jmunoz@syner.info"
			  // more emails
			);
			$email_to = implode(',', $recipients);

			$from="From: $name2send<info@syner.info>\r\nReturn-path: info@syner.info";
			$subject="IDC Validada";
			mail($email_to.";jmunoz@syner.info", $subject, $message, $from);


		}
?>
