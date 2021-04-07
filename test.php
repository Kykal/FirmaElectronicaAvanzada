<?php
    if( !empty($_POST) ){
        $dir_subida = './docs/';
        $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario2']['name']);
        echo $fichero_subido;

        if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
        }
        // include 'conn.php';
        
        // $file = $_POST['pdfFile'];      
        
        // header('Content-type: application/pdf');
        // header('Content-Disposition: inline; filename="' . $filename . '"');
        // header('Content-Transfer-Encoding: binary');
        // header('Accept-Ranges: bytes');
  
        // @readfile($file);
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
                <!-- El tipo de codificación de datos, enctype, DEBE especificarse como sigue -->
                <form enctype="multipart/form-data" action="test.php" method="POST">
                    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
                    
                    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
                    Enviar este fichero: <input name="fichero_usuario" type="file" /> <br>
                    Enviar este fichero: <input name="fichero_usuario2" type="file" /> <br>
                    <input type="submit" value="Enviar fichero" />
                </form>
            </main>
        </div>
    </body>
</html>