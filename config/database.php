<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "workshop_management";

	$connection = mysqli_connect($host, $username, $password, $database);

	//Check connection
	if(mysqli_connect_error()){
		echo "Mysql connect error : " . mysqli_connect_error();
	}
?>