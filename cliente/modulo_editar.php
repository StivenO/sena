<?PHP include ("../seguridad.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de clientes</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="sidebar.css">
</head>

<body>

    <div id="sidebar">
        <div class="toggle-btn">
            <span>&#9776;</span>
        </div>
        <ul id="list">
            <li>
                <h1>Agroveterinaria La Salle</h1>
                <br />
                <h2><?PHP echo $_SESSION["nomuser"];?></h2>
                <h2><?PHP echo $_SESSION["apeuser"];?></h2>

            </li>
            <li><img src="Images/logo.jpg" alt="logotipo" id="logo_sidebar"></li>
            <li><a href="modulo_clientes.php"><i class="fi-rr-user"></i> Clientes</a></li>
            <li><a href="modulo_citas.php"><i class="fi-rr-stethoscope"></i> Citas</a></li>
            <li><a href="modulo_empleados.php"><i class="fi-rr-briefcase"></i> Empleados</a></li>
            <li><a href="prueba.php"><i class="fi-rr-briefcase"></i> Prueba</a></li>
            <li><a href="salir.php"><i class="fi-rr-sign-out"></i> Cerrar sesión</a></li>
        </ul>


    </div>

    <div id="encabezado">
        <h1>Agroveterinaria La Salle</h1>
        <img src="Images/logo.jpg" id="logo">
        <h2>Registro de clientes</h2>
    </div>
    <?php
      require '../conexion/conexion.php';

      $idcliente = $_GET['idcliente'];
      $sql = "SELECT * FROM clientes WHERE id_cliente = $idcliente";
      $result = $con->query( $sql );
      $persona = $result->fetch_assoc();

      if ($_POST) {

        $n_identificacion = $_POST['n_identificacion'];
        $nombre_clien = $_POST['nombre_clien'];
        $apellido_clien = $_POST['apellido_clien'];
        $correo_clien = $_POST['correo_clien'];
        $telefono_clien = $_POST['telefono_clien'];
        $direc_cliente = $_POST['direc_cliente'];

        $sql = "UPDATE clientes
            SET n_identificacion = '$n_identificacion', nombre_clien = '$nombre_clien', apellido_clien = '$apellido_clien', correo_clien = '$correo_clien', telefono_clien = '$telefono_clien', direc_cliente = '$direc_cliente'
            WHERE id_cliente = $idcliente";

        $result = $con->query($sql);

        if ($result)
          header('location: ../modulo_clientes.php');
        else
          echo "Error!!!..." . $con->error;

      }

    ?>

    <div id ="form">
        <form method="post" class="user">
            <label for "id">Identificación cliente:</label><br>
            <input name="n_identificacion" type="number" id="id" min=10000000 max=1999999999 value="<?= $persona['n_identificacion'] ?>"><br>
            <label for "name">Nombre/s cliente:</label><br>
            <input name="nombre_clien" type="text" id="name" value="<?= $persona['nombre_clien'] ?>"><br>
            <label for "last_name">Apellidos:</label><br>
            <input name="apellido_clien" type="text" id="last_name" value="<?= $persona['apellido_clien'] ?>"><br>
            <label for "email">Email:</label><br>
            <input name="correo_clien" type="email" id="email" value="<?= $persona['correo_clien'] ?>"><br>
            <label for "phone">Teléfono:</label><br>
            <input name="telefono_clien" type="tel" id="phone" min=3009999999 max=3519999999 value="<?= $persona['telefono_clien'] ?>"><br>
            <label for "adress">Dirección:</label><br>
            <input name="direc_cliente" type="text" id="adress" value="<?= $persona['direc_cliente'] ?>"><br>
            <input type="submit" name="" value="Editar Cliente" class="btn btn-primary btn-user btn-block"></input>
        </form>
    </div>

</body>

<script src="main.js" charset="UTF-8"></script>

</html>
