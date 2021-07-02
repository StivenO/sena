<!DOCTYPE html>
<!-- Prueba Stiven -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="login.css">
</head>
<body id="login">

    <div class="login_box">
        <img class="logo" src="Images/logo.jpg" alt="logo">
        <h1>Iniciar sesión</h1>
        <form action="loginb.php" method="POST" class="user">

            <!-- USERNAME -->
            <label for="username">Usuario:</label>
            <input name="nick" type="text" placeholder="Ingresa el usuario" id="username">

            <!-- PASSWORD -->
            <label for="password">Contraseña:</label>
            <input name="pass" type="password" placeholder="Ingresa la contraseña" id="password">
            <?php
                if ($_GET){
                  if ($_GET["error"] == "si"){?>
                    <td colspan="2" align="center" bgcolor=red>
                    <span style="color:#f76a6a"><b>Datos incorrectos*</b></span>
                <?php }}else{?>
                  <td colspan="2" align="center" bgcolor=#cccccc>Introduce datos verídicos
                <?php } ?>
            <input type="submit" value="Ingresar">
            <p>En caso de olvidar su usuario o contraseña, contacte al administrador.</p>


        </form>


    </div>

</body>
</html>
