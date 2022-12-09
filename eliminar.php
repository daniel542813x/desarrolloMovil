<?php
    $con =new mysqli("localhost","root","6aaf57025705c786","usuarios") or die ('error ');

    
    //$numeroidentificacion=$_POST["nmb_identity3"];


    $json = file_get_contents('php://input');

    // Converts it into a PHP object
    $data = json_decode($json);

    $c= $data->cedula;

    $sql="delete from registros where documento='".$c."'";
    
    //header("Location: https://desarrollom.deiwerchaleal.com/");
    mysqli_query($con,$sql);

    echo "Registro eliminado correctamente";
    
    ?>