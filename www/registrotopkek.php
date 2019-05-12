<?php

	//incluye conexion
	include ("conexion.php");

	// recive variable usuario
	$usuario=$_GET[usuario];
	$nombre=$_GET[name];
	$apellido=$_GET[last_name];
	$correo=$_GET[email];
	$password=$_GET[password];
	$password2=$_GET[password2];
	$sexo = $_GET[sexo];
    $sangrita = $_GET[sangrita];

	if ($password==$password2){


		$elSQL="select Usuario from LogIn where Usuario='".$usuario."'";
		$result = mysqli_query($link,$elSQL) or die("Unable to select: ".mysqli_error());	

		if(mysqli_fetch_row($result)) {	
			echo "<<< Usuario ya existe >>>";

		} else {
			//genera el sql
			$elSQL="insert into LogIn (Usuario, Nombre, Apellido, Email, Contrasena, Sexo, Sangre) values ('".$usuario."', '".$nombre."', '".$apellido."', '".$correo."', '".$password."', '".$sexo."', '".$sangrita."')";
	//		echo $elSQL;
			//Consulta en la base de datos
			$result2 = mysqli_query($link,$elSQL) or die("Unable to select: ".mysqli_error($link));	
			//Limpia la variable nombre


			if($result2) {	
				//Asigna el primer campo a la variable nombre	
				echo 1;
			} 
			else
			{
				echo 2;
			}
		}
	} else {
		echo 3;
	}

?>