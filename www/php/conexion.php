<?php
	$hostname = "ulsa.onetecstudio.com";
	$username = "niwadub";
	$password = "gatitalove12";
	$database = "sangreappmichel";

	$link = mysqli_connect($hostname,$username,$password,$database);

	mysqli_select_db($link, $database) or die ("No me pude conectar");

	?>