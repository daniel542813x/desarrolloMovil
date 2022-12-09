<?php
    $con =new mysqli("localhost","root","6aaf57025705c786","usuarios") or die ('error ');

    // Takes raw data from the request
    $json = file_get_contents('php://input');

    // Converts it into a PHP object
    $data = json_decode($json);

    $n= $data->tipoDocumento;
    
    $tipodoc=$data->tipoDocumento;
    $numeroidentificacion=$data->numeroDocumento;
    $fechanacimiento=$data->fechaNacimiento;
    $paisnaci=$data->lugarNacimiento;
    $apellido=$data->primerApellido;
    $sapellido=$data->segundoApellido;
    $nombre=$data->primerNombre;
    $onombre=$data->segundoNombre;
    $correo=$data->email;
    $telefono=$data->numeroTelefono;


    $sql="insert into registros values(
        '".$tipodoc."',
        '".$numeroidentificacion."',
        '".$fechanacimiento."',
        '".$paisnaci."',
        '".$apellido."',
        '".$sapellido."',
        '".$nombre."',
        '".$onombre."',
        '".$correo."',
        '".$telefono."'
        )";
    
    //header("Location: https://desarrollom.deiwerchaleal.com");
    mysqli_query($con,$sql);
    echo $n;
?>