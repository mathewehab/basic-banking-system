<?php

	$conn = mysqli_connect('localhost','root','','sparksfoundation');

	if(!$conn){
		die("Failed to Connect to My SQL --> ".mysqli_connect_error());
	}

?>
