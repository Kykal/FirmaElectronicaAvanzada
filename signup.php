<?php
    if(!empty($_POST)){

        include 'conn.php';

        $nombre = $_POST['nombre'];
        $correo = $_POST['email'];
        $contra = $_POST['contra'];

        $insertar = "INSERT INTO    users   (nombre,    correoE,    contra)
                                    VALUES  ('$nombre', '$correo',  '$contra')";

        $recurso = sqlsrv_prepare($conn, $insertar);

        if(sqlsrv_execute($recurso)){
            header('Location: index.php');
        }else{
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="./admon/signup.css" />
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat' type='text/css' />
        <title>E-Signature - Registrarse</title>
    </head>
    <body>
        <header class="center">
            E-Signature
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
        </div>
    </body>
</html>