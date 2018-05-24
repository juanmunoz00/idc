<?php//Fields valid, connect to the database	$server="localhost";	$username="bmdhostc_jamunoz";	$password="x$wfT)P}~Q(*";	$database="bmdhostc_cl45-synertst69";		$link=mysqli_connect($server, $username, $password, $database);		// Check connection	if ($link->connect_error) {		//die("Connection failed: " . $link->connect_error);		die("<script>location.href = './conn_err.html'</script>");	} 
		
?>
