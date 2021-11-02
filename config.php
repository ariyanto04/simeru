<?php

	$con = mysqli_connect("localhost", "root", "", "simeru");
	
	if($con->connect_error){
		die("Connect Failed: " . $con->connect_error);
	} else {
		echo "";
	}
?>