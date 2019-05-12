<?php
	include("conexion.php");
	$elSQL = "select id, Texto1, Texto2 from Ejemplo";
	$result = mysql_query ($elSQL,$link) or die ("No pude seleccionar ".mysql_error());
	while ($row=mysql_fetch_array($result)){
		echo $row["id"]." - ".$row["Texto1"]." - ".$row["Texto2"];
	}
?>