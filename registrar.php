<?php
    $con =new mysqli("localhost","root","6aaf57025705c786","usuarios") or die ('error ');

    $tipodoc=$_POST["tipodoc"];
    $numeroidentificacion=$_POST["nmb_identity"];
    $fechanacimiento=$_POST["dt_nacimiento"];
    $paisnaci=$_POST["txt_counacimiento"];
    $apellido=$_POST["txt_apellido"];
    $sapellido=$_POST["txt_sapellido"];
    $nombre=$_POST["txt_nombre"];
    $onombre=$_POST["txt_othername"];
    $correo=$_POST["email"];
    $telefono=$_POST["nmb_phone"];


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
    
    header("Location: https://desarrollom.deiwerchaleal.com");
    mysqli_query($con,$sql);


    
    ?>
