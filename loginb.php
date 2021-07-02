<?php
    session_start();
    require 'conexion/conexion.php';

    $nick = $_POST['nick'];
    $pass = $_POST['pass'];

    $sql= "SELECT * FROM usuarios WHERE nick = '$nick' AND pass = '$pass'";

    $result = $con -> query($sql);
    $data = $result->fetch_assoc();

    if ( $result->num_rows > 0 ) {
      $_SESSION["autentificado"]= "si";
      $_SESSION["nomuser"] = $data['nombre_user'];
      $_SESSION["apeuser"] = $data['apellido_user'];
      $_SESSION["nick"] = $data['nick'];
      $_SESSION["id"] = $data['iduser'];

      header ("Location: modulo_clientes.php");
      }else {
        header("Location: login.php?error=si");
      }
 ?>
