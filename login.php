<?php
        include 'conn.php';

        $correo = $_POST['email'];
        $contra = $_POST['contra'];

        $records = $conn->prepare('SELECT correoE, contra FROM users WHERE correoE=:correo');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if( count($results) > 0 && password_verify($_POST['contra'], $results['contra']) ){
            $message = 'Sesion iniciada';


        }else{
            $message = 'Error al iniciar sesion';
        }

        header('Location: firma.php');
?>