<?php
    include 'conn.php';

    $correo = $_POST['correo'];
    $contra = $_POST['contra'];

    echo " <strong>Correo:</strong> <i>$correo</i> <br><br>";
    echo " <strong>Contraseña:</strong> <i>$contra</i> <br><br>";

    $consultar = sqlsrv_query( $conn, " SELECT correoE, contra FROM users WHERE correoE='$correo' AND contra='$contra' " );

    echo $consultar;

    if( !sqlsrv_next_result($consultar) ){
        echo '<br><br>datos incorrectos';
    }else{
        header("Location: firma.php");
    }
?>