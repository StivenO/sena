<?php
  require '../conexion/conexion.php';
// resive datos

  $idcliente = $_GET['idcliente'];

// Eliminar datos

  $sql = "DELETE FROM clientes WHERE id_cliente = $idcliente";

  $result = $con->query( $sql ); //envia a conexion

  if ($result) {
    header("Location: ../prueba.php");
  }else {
    echo " Error al eliminar datos !" . $con->error;
  }

 ?>
