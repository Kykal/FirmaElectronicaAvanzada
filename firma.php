<?php
    if( !empty($_POST) ){
        $nombre = $_POST['nombre'];
        $RFC = $_POST['RFC'];
        $pdfFile = basename($_FILES['pdfFile']['name']);
        $cerFile = basename($_FILES['cerFile']['name']);
        $keyFile = basename($_FILES['keyFile']['name']);

        $dir_subida = './docs/' . $RFC . "/";
        mkdir("./docs/" . $RFC . "/", 0777, true);
        $pdfDir = $dir_subida . $pdfFile;
        $cerDir = $dir_subida . $cerFile;
        $keyDir = $dir_subida . $keyFile;

        move_uploaded_file($_FILES['pdfFile']['tmp_name'], $pdfDir);
        move_uploaded_file($_FILES['cerFile']['tmp_name'], $cerDir);
        move_uploaded_file($_FILES['keyFile']['tmp_name'], $keyDir);

        include 'conn.php';
        
        $insertar = "INSERT INTO    firma   (nombre,    RFC,    pdfFile,    cerFile,    keyFile)
                                    VALUES  ('$nombre', '$RFC', '$pdfFile', '$cerFile',  '$keyFile')";

        $recurso = sqlsrv_prepare($conn, $insertar);
        
        sqlsrv_execute($recurso);
        $command = escapeshellcmd('python pdfs.py "' . $nombre . '" ' .  $RFC . ' ' . $cerDir . ' ' . $keyDir . ' ' . $pdfDir);
        $output = shell_exec($command);
    }
?> 

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Desarrolladores" content="[1800717] Alan Xavier Benavides Benavides">
        <meta name="" content="[1810686] Jesús Marcelo Gutiérrez Bravo">

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
                <form enctype="multipart/form-data" action="firma.php" method="POST">
                    <label for="">Nombre completo</label> <br>
                    <input type="text" name="nombre" id="nombre" placeholder="Tu nombre completo" autocomplete="off"> <br><br>

                    <label for="">RFC</label> <br>
                    <input type="text" name="RFC" id="RFC" placeholder="Tu RFC" autocomplete="off"> <br><br>

                    <label for="">Contraseña</label> <br>
                    <input type="password" name="contra" id="contra" placeholder="Tu contraseña"> <br><br>

                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> <br>

                    <label for="">Archivo PDF</label> <br>
                    <input type="file" name="pdfFile" id="pdfFile" placeholder="Archivo PDF" accept="applicaton/pdf" > <br><br>

                    <label for="">Certificado (Archivo <i>.cer</i>)</label> <br>
                    <input type="file" name="cerFile" id="cerFile" placeholder="Archivo .cer"> <br><br>

                    <label for="">Llave (Archivo <i>.key</i>)</label> <br>
                    <input type="file" name="keyFile" id="keyFile" placeholder="Archivo .key"> <br><br>

                    <input type="submit" value="Firmar documento">
                </form>
            </main>
        </div>
    </body>
</html>