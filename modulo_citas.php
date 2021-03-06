<?PHP include ("seguridad.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamiento de citas</title>
    <link rel="stylesheet" href="form.css">
    <link rel ="stylesheet" href="sidebar.css"
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
            <li><a href="login.php"><i class="fi-rr-sign-out"></i> Cerrar sesión</a></li>
        </ul>


    </div>


    <div id="encabezado">
        <h1>Agroveterinaria La Salle</h1>
        <img src="Images/logo.jpg" id="logo">
        <h2>Agendamiento de citas</h2>
    </div>


    <div id="form">
      <?php
      require 'conexion/conexion.php';
            $sql = "SELECT * FROM tservicio";
            $resultado = $con->query( $sql );
        ?>
        <form>

            <label for "id">Identificación cliente:</label><br>
            <input type="number" id="id" min=10000000 max=1999999999><br>
            <br>
              <select name="tservice" id="">
              <option selected="true" value="value1">Tipo de servicio: </option>
              <?php
                                                            while ($tservicio = $resultado->fetch_assoc() ) {
                                                              echo "<option value='".$tservicio['id_tservicio']."'>".$tservicio['name']."</option>";
                                                           }
                                                           ?>
            </select><br>
            <label for "date">Fecha:</label><br>
            <input type="date" id="date"><br>
            <label for "time">Hora:</label><br>
            <input type="time" id="time"><br>
            <input type="submit" id="submit">

        </form>

    </div>



    <script src="main.js" charset="UTF-8"></script>


</body>
</html>
