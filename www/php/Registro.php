<?php require_once('conexion.php'); ?>

<?php

    if (isset($_GET['nombre']) && isset($_GET['last_name']) && isset($_GET['usuario']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['password2']) && isset($_GET['sexo']) && isset($_GET['sangrita'])){

        echo ayylmao;

        $nombre = $_GET[nombre];
        $last_name = $_GET[last_name];
        $usuario = $_GET[usuario];
        $email = $_GET[email];
        $password = $_GET[password];
        $password2 = $_GET[password2];
        $sexo = $_GET[sexo];
        $sangrita = $_GET[sangrita];

        echo prueba;

        $insert = sprintf("INSERT INTO LogIn (Usuario, Contrasena, Nombre, Apellido, Sexo, Sangre, Email) VALUES ('".$usuario."', '".$password."', '".$name."', '".$last_name."','".$sexo."', '".$sangrita."', '".$email."')");

        echo prueba2;

        echo $insert;

        mysqli_select_db($link, $database);

        $resultado = mysqli_query($link, $insert) or die (mysql_error());

        echo 1;
    }

    print_r(error_get_last()); 

?>