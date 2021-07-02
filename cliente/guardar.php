<?php

	require '../conexion/conexion.php';

	$n_identificacion = $_POST['n_identificacion'];
	$nombre_clien = $_POST['nombre_clien'];
	$apellido_clien = $_POST['apellido_clien'];
	$correo_clien = $_POST['correo_clien'];
	$telefono_clien = $_POST['telefono_clien'];
	$direc_cliente = $_POST['direc_cliente'];

	$sql = "INSERT INTO clientes
				VALUES(null, '$n_identificacion','$nombre_clien', '$apellido_clien', '$correo_clien', '$telefono_clien', '$direc_cliente','2')";

	$result = $con->query( $sql );

	if ($result) {
		// echo "Registro insertado exitosamente!!!";
		header('location: ../modulo_citas.php');
	}else{
		echo "Error!!!..." . $con->error;
	}

?>
