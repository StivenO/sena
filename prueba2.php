<?PHP include ("seguridad.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de clientes</title>
    <link rel="stylesheet" href="css/prueba.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="sidebar.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

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
            <li><a href="salir.php"><i class="fi-rr-sign-out"></i> Cerrar sesión</a></li>
        </ul>


    </div>

    <div id="encabezado">
        <h1>Agroveterinaria La Salle</h1>
        <img src="Images/logo.jpg" id="logo">
        <h2>Prueba Cliente</h2>
    </div>

    <div id ="form">
      <!-- Contenido de la página de inicio -->
      <div class="container-fluid">

    <a href="modulo_clientes.php" class="btn btn-primary float-right"><i class="fas fa-user-plus"></i> Agregar Proveedor</a>

    <!-- Encabezado de página -->
    <h1 class="h3 mb-4 text-gray-800">Prueba Cliente</h1>


          <!-- Stiven_O. -->
        <?php
                      require 'conexion/conexion.php';
                      $sql = "SELECT * FROM `mascotas` WHERE cliente_id = $idcliente";
                      $result = $con->query( $sql );

                      // $datos = $result->fetch_assoc();

                      echo "<div class='table-responsive'>
                          <table class='table table-hover table-striped table-bordered table-sm'>
                          <thead>
                            <tr class='text-center'>
                              <th style='width:100px'>Tipo de ID</th>
                              <th>No. ID</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th style='width:150px'>Correo Electrónico</th>
                              <th>Teléfono</th>
                              <th style='width:200px'>Dirección</th>
                              <th style='width:110px'>Agregar</th>
                              <th style='width:110px'>Acción</th>
                            </tr>
                          </thead>
                          <tbody>";
                          while ($datos = $result->fetch_assoc()) {
                                  echo "<tr>";
                                  echo "<td style='text-align:center'>". $datos['id_cliente'] ."</td>";
                                  echo "<td>". $datos['n_identificacion'] ."</td>";
                                  echo "<td>". $datos['nombre_clien'] ."</td>";
                                  echo "<td>". $datos['apellido_clien'] ."</td>";
                                  echo "<td>". $datos['correo_clien'] ."</td>";
                                  echo "<td>". $datos['telefono_clien'] ."</td>";
                                  echo "<td>". $datos['direc_cliente'] ."</td>";

                        echo "<td>
                        <a href='cliente/modulo_editar.php?idcliente={$datos['id_cliente']}' class='btn btn-outline-success'> <i class='bi bi-plus' style='size:1x'></i> </a>
                       </td>";
                       echo "<td>
                       <a href='cliente/modulo_editar.php?idcliente={$datos['id_cliente']}' class='btn btn-outline-info'> <i class='fas fa-edit ' style='size:1x'></i> </a>
                       <a href='cliente/eliminar.php?idcliente={$datos['id_cliente']}' onclick='return confirm(\"¿Está seguro de eliminar este Proveedor?\")' class='btn btn-outline-danger'> <i class='fas fa-trash-alt'></i> </a>
                      </td>";
    echo "</tr>";
  }
  echo "</tbody></table></div>";

?>
<!-- Stiven_O. -->
    </div>

</body>

<script src="main.js" charset="UTF-8"></script>

</html>
