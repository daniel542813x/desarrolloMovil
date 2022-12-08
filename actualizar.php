<?php
    $con =new mysqli("localhost","root","6aaf57025705c786","usuarios") or die ('error ');

    $tipodoc=$_POST["tipodoc2"];
    $numeroidentificacion=$_POST["nmb_identity2"];
    $fechanacimiento=$_POST["dt_nacimiento2"];
    $paisnaci=$_POST["txt_counacimiento2"];
    $apellido=$_POST["txt_apellido2"];
    $nombre=$_POST["txt_nombre2"];
    $correo=$_POST["email2"];
    $telefono=$_POST["nmb_phone2"];



    $sql="UPDATE registros SET fecha='".$fechanacimiento."',lugarnacimiento='".$paisnaci."',primerapellido='".$apellido."',primernombre='".$nombre."',correo='".$correo."',telefono='".$telefono."' WHERE documento='".$numeroidentificacion."' ";
    
    header("Location: https://desarrollom.deiwerchaleal.com");
    mysqli_query($con,$sql);


    
    ?>
