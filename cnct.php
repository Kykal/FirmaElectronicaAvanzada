<?php
    $serverName = "DESKTOP-E9C1KDP"; //serverName\instanceName

    // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
    // La conexi�n se intentar� utilizando la autenticaci�n Windows.
    $connectionInfo = array( "Database"=>"admonmc");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
?>