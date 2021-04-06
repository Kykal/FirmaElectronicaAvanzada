<?php
    if(!empty($_POST)){

        include 'conn.php';

        $pdfFile = $_POST['pdfFile'];
        $cerFile = $_POST['cerFile'];
        $keyFile = $_POST['keyFile'];

        $insertar = "INSERT INTO    docs   (pdfFile,    cerFile,    keyFile)
                                    VALUES  ('$pdfFile', '$cerFile',  '$keyFile')";

        $recurso = sqlsrv_prepare($conn, $insertar);
    }
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
        
        <title>E-Signature - Firma</title>
    </head>
    <body>
        <div class="wrapper">
            <header class="center">
                <a href="index.php"><img src="./img/logo.png" alt="E-Signature logo"></a>
            </header>

            <main class="center">
                <h2>¡Firma tus documentos!</h2>
                <br>
                <form action="firma.php" method="POST">
                    <label for="">Archivo PDF</label> <br>
                    <input type="file" name="pdfFile" id="pdfFile" placeholder="Archivo PDF" accept="applicaton/pdf" > <br><br>

                    <label for="">Archivo <i>.cer</i></label> <br>
                    <input type="file" name="cerFile" id="cerFile" autocomplete="off" placeholder="Archivo .cer"> <br><br>

                    <label for="">Archivo <i>.key</i></label> <br>
                    <input type="file" name="keyFile" id="keyFile" autocomplete="off" placeholder="Archivo .key"> <br><br>

                    <input type="submit" value="Firmar documento">
                </form>
            </main>
        </div>
    </body>
</html>