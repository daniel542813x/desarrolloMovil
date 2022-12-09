<?php
    $con =new mysqli("localhost","root","6aaf57025705c786","usuarios") or die ('error ');

    // Takes raw data from the request
    $json = file_get_contents('php://input');

    // Converts it into a PHP object
    $data = json_decode($json);

    
    $tipodoc=$data->tipoDocumento;
    $numeroidentificacion=$data->numeroDocumento;
    $numeroidentificacionAnterior=$data->documentoAnterior;
    $fechanacimiento=$data->fechaNacimiento;
    $paisnaci=$data->lugarNacimiento;
    $apellido=$data->primerApellido;
    $sapellido=$data->segundoApellido;
    $nombre=$data->primerNombre;
    $onombre=$data->segundoNombre;
    $correo=$data->email;
    $telefono=$data->numeroTelefono;



    $sql="UPDATE registros SET tipoidentificacion='".$tipodoc."',documento='".$numeroidentificacion."',fecha='".$fechanacimiento."',lugarnacimiento='".$paisnaci."',primerapellido='".$apellido."',segundoapellido='".$sapellido."',primernombre='".$nombre."',otrosnombres='".$onombre."',correo='".$correo."',telefono='".$telefono."' WHERE documento='".$numeroidentificacionAnterior."' ";
    
    //header("Location: https://desarrollom.deiwerchaleal.com");
    mysqli_query($con,$sql);

    echo "regreso ".$nombre.",".$numeroidentificacion.",".  $fechanacimiento.",".$paisnaci.",". $apellido.",".$numeroidentificacionAnterior;
    
    ?>
