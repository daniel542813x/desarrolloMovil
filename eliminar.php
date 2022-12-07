<?php
    $con =new mysqli("localhost","root","6aaf57025705c786","usuarios") or die ('error ');

    
    $numeroidentificacion=$_POST["nmb_identity3"];


    $sql="delete from registros where documento='".$numeroidentificacion."'
    ";
    
    header("Location: https://desarrollom.deiwerchaleal.com/");
    mysqli_query($con,$sql);


    
    ?>