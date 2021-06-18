<?php

	$conn = mysqli_connect('localhost','id17081175_stephanraj','Stephanmoon@123','id17081175_stephanintern');

	if(!$conn){
		die("Could not connect to the database due to the following error - ".mysqli_connect_error());
	}

?>