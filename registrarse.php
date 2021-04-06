<?php
    require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="style.css" />
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat' type='text/css' />
        <title>E-Signature - Registrarse</title>
    </head>
    <body>
        <header class="center">
            <a href="index.php"><img src="./img/logo.png" alt="E-Signature logo"></a>
        </header>
        <br />
    <br />
    <br />
        <div class="center">
            <form action="signup.php" method="POST">
                <label>Nombre</label>
                <br />
                <input type="text" id="nombre" name="nombre" />
                <br />
                <label>Correo electronico</label>
                <br />
                <input type="email" id="email" name="email" />
                <br />
                <label>Contrasena</label>
                <br />
                <input type="password" id="contra" name="contra" />
                <br /><br />
                <input type="submit" value="Registrarse"/>
            </form>
            <a href="index.php">Iniciar sesion</a>
        </div>

        <footer>
            <div class="testConnection center">
                <p>
                    Proyecto de medio curso de la asignatura
                    <strong>Administracion de proyectos de software</strong> los dias
                    <strong>martes</strong> en el horario de
                    <strong>N4 a N6 (07:30 PM a 10:00 PM)</strong>.
                </p>
            </div>
        </footer>
    
    </body>
</html>