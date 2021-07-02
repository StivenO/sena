<?php

	require '../conexion/conexion.php';

	$nombre_user = $_POST['nombre_user'];
	$apellido_user = $_POST['apellido_user'];
	$correo_user = $_POST['correo_user'];
	$telefono_user = $_POST['telefono_user'];
	$nick = $_POST['nick'];
	$pass = $_POST['pass'];

	$sql = "INSERT INTO usuarios
				VALUES(null,'$nombre_user', '$apellido_user', '$correo_user', '$telefono_user', '$nick', '$pass','2')";

	$result = $con->query( $sql );

	if ($result) {
		// echo "Registro insertado exitosamente!!!";
		header('location: ../modulo_clientes.php');
	}else{
		echo "Error!!!..." . $con->error;
	}

?>
