<?php
	session_start();

	if($_GET["logout"]==1 AND $_SESSION['id']) {session_destroy();
		$message = "You've been logged out, have a nice day";
	}

	include("./dba/connection.php");

	//DB connection
	if( mysqli_connect_error()){
		echo mysqli_connect_error();
		die;//die "Could not connect to server";//mysqli_connect_error();
	}
	else{//If DB connection is succesful
		$curp=$_POST['curp'];
		$ap_paterno=$_POST['ap_paterno'];
		$ap_materno=$_POST['ap_materno'];
		$nombre=$_POST['nombre'];
		$f_nac=$_POST['f_nac'];
		$nac_ciudad=$_POST['nac_ciudad'];
		$nac_estado=$_POST['nac_estado'];
		$dom_calle_num=$_POST['dom_calle_num'];
		$dom_col=$_POST['dom_col'];
		$dom_cod_post=$_POST['dom_cod_post'];
		$dom_ciudad=$_POST['dom_ciudad'];
		$dom_estado=$_POST['dom_estado'];
		$num_cta_agua=$_POST['num_cta_agua'];
		$num_cta_luz=$_POST['num_cta_luz'];
		$tel_res=$_POST['tel_res'];
		$tel_cel=$_POST['tel_cel'];
		$corr_elect=mysqli_real_escape_string($link, $_POST['corr_elect']);//mysqli_real_escape_string($link, $email)

		if ($_POST['Registrarse']){
				$query = "INSERT INTO `idc_identidad`";
				$query = $query."(`curp`, `ap_paterno`, `ap_materno`, `nombre`, `f_nac`, `nac_ciudad`, `nac_estado`, `dom_calle_num`, `dom_col`,";
				$query = $query."`dom_cod_post`, `dom_ciudad`, `dom_estado`, `num_cta_agua`, `num_cta_luz`, `tel_res`, `tel_cel`, `corr_elect`)";
				//$query.$ap_paterno."','".$ap_materno."','".$tipodeusuario."','".$sexo."','".$f_nacim."','".$nombre."','";
				$query = $query."VALUES	('".$curp."','".$ap_paterno."','".$ap_materno."','".$nombre."','".$f_nac."','".$nac_ciudad."','".$nac_estado."',
				'".$dom_calle_num."','".$dom_col."','".$dom_cod_post."','".$dom_ciudad."','".$dom_estado."','".$num_cta_agua."','
				'".$num_cta_luz."','".$tel_res."','".$tel_cel."','".$corr_elect."','".$dom_estado."','".$num_cta_agua."',')";

				//,NOW())";

				mysqli_query($link, $query);

				$message = "¡Registro Creado!";

				die("<script>location.href = 'index.html'</script>");////header("Location:maintratamientosmedicos_editar.php");
			}//vertratamiento
	}//Submit

?>
