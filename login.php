<?php
    include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Desarrolladores" content="[1800717] Alan Xavier Benavides Benavides">
        <meta name="" content="[XXXXXXX] ?">

        <script type="text/javascript" src="https://livejs.com/live.js"></script>
        <link rel="stylesheet" href="./css/base.css" />
        <link rel="stylesheet" href="./css/signup.css" />
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat' type='text/css' />
        
        <title>E-Signature - Registrarse</title>
    </head>
    <body>
        <div class="wrapper">
            <header class="center">
                <a href="index.php"><img src="./img/logo.png" alt="E-Signature logo"></a>
            </header>

            <main class="center">
                <h2>¡Inicia sesión!</h2>
                <br>
                <form action="checkin.php" method="POST">
                    <label for="">Correo electrónico</label> <br>
                    <input type="email" name="correo" id="correo" autocomplete="off" placeholder="Correo electrónico"> <br><br>

                    <label for="">Contraseña</label> <br>
                    <input type="password" name="contra" id="contra" autocomplete="off" placeholder="Contraseña"> <br><br>

                    <input type="submit" value="Iniciar sesión">
                </form>
                <br><br><br>
                ¿No tienes cuenta?<br>
                <a href="signup.php">¡Hazte una!</a>
            </main>
        </div>
    </body>
</html>