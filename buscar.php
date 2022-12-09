<?php
  
//-------------------------------------------------------------------------------------


    $conexion=mysqli_connect('localhost','root','6aaf57025705c786','usuarios');
    $json = file_get_contents('php://input');

    // Converts it into a PHP object
    $data = json_decode($json);

    $c= $data->cedula;
$sql="SELECT * from registros where documento='".$c."'";
$result=mysqli_query($conexion,$sql);

//echo json_encode(mysqli_fetch_array($result));


$respuesta=[];
while($mostrar=mysqli_fetch_array($result)){

    $r=[
        "tipoidentificacion"=>$mostrar['tipoidentificacion'],
        "documento"=>$mostrar['documento'],
        "fecha"=>$mostrar['fecha'],
        "lugarnacimiento"=>$mostrar['lugarnacimiento'],
        "primerapellido"=>$mostrar['primerapellido'],
        "segundoapellido"=>$mostrar['segundoapellido'],
        "primernombre"=>$mostrar['primernombre'],
        "otrosnombres"=>$mostrar['otrosnombres'],
        "correo"=>$mostrar['correo'],
        "telefono"=>$mostrar['telefono'],
    ];
    
    $respuesta[]=$r;
    
}
echo json_encode($respuesta);


?>