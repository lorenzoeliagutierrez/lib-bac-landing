<?php
	// $con = new mysqli('localhost', 'root', '', 'lmss');


	$con = new mysqli('localhost', 'root', '', 'lmss');
	
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}
	
?>