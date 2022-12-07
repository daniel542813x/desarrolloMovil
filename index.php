<?php
$conexion=mysqli_connect('localhost','root','6aaf57025705c786','usuarios');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-registro </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<style>
    body {
        background: rgb(0,0,0)
    }
</style>

<body >
    
    <form id="form1" method="post" action="registrar.php">
        <section class="d-flex justify-content-center">
            <h1 style="background-color: rgb(0, 0, 0); color:rgb(255, 255, 255)">Registro de Usuarios </h1>
        </section>
        <section class="d-flex justify-content-center">
            <div class="card col-sm-6 p-3" style="background-color: rgb(221, 234, 225);">
                <div class="mb-3">
                    <h2 style="background-color: rgb(0, 0, 0); color:rgb(255, 255, 255)">Identificación</h2>
                </div>
                <div class="mb-2">
                    Tipo de identificación:
                    <select name="tipodoc" id="tipodoc">
                        <option value="ti">Tarjeta de identidad</option>
                        <option value="cc">Cédula de Ciudadanía</option>
                        <option value="ce">Cédula de Extranjería</option>
                        <option value="pas">Pasaporte</option>
                        <option value="nit">NIT</option>
                    </select>
                    Número de identificación*:
                    <input type="number" placeholder="# Documento" name="nmb_identity" id="nmb_identity" title="Escribe tu número de identificación" required>
                    <br><br>
                    Fecha de nacimiento* :
                    <input type="date" name="dt_nacimiento" id="dt_nacimiento" title="Fecha de nacimiento" required>
                    Lugar de nacimiento:
                    <input type="text" name="txt_counacimiento" id="txt_counacimiento">
                    <br><br>
                    Primer Apellido*:
                    <input type="text" name="txt_apellido" id="txt_apellido" title="Se requiere un apellido para el registro" required>
                    Segundo Apellido:
                    <input type="text" name="txt_sapellido" id="txt_sapellido">
                    <br><br>
                    Primer Nombre*:
                    <input type="text" name="txt_nombre" id="txt_nombre" title="Se requiere un nombre para el registro" required>
                    Otros Nombres:
                    <input type="text" name="txt_othername" id="txt_othername">
                    <br><br>
                    Correo Electronico*:
                    <input type="email" name="email" id="email" title="Ingresa un correo electronico" required>
                    Teléfono:
                    <input type="number" name="nmb_phone" id="nmb_phone">
                    <br><br>
                    <input type="submit" value="Agregar Usuario" class="btn btn-success">campos obligatorios (*)
                </div>
            </div>
        </section>
        <br>
        
    </form>
    <form id="form2" method="post" action="actualizar.php">
        <section class="d-flex justify-content-center">
            <h1 style="background-color: rgb(0, 0, 0); color:rgb(255, 255, 255)"> Actualización usuarios</h1>
        </section>
        <section class="d-flex justify-content-center">
            <div class="card col-sm-6 p-3" style="background-color: rgb(221, 234, 225);">
                <div class="mb-3">
                    <h2 style="background-color: rgb(0, 0, 0); color:rgb(255, 255, 255)">Identificación</h2>
                </div>
                <div class="mb-2">
                    
                    Número de identificación*:
                    <input type="number" placeholder="# Documento" name="nmb_identity2" id="nmb_identity2" title="Escribe tu número de identificación" required>
                    <br><br>
                    <div class="mb-3">
                        <h2 style="background-color: rgb(0, 0, 0); color:rgb(255, 255, 255)">Campos a actualizar</h2>
                    </div>
                    Fecha de nacimiento* :
                    <input type="date" name="dt_nacimiento2" id="dt_nacimiento2" title="Fecha de nacimiento" >
                    Lugar de nacimiento:
                    <input type="text" name="txt_counacimiento2" id="txt_counacimiento2">
                    <br><br>
                    Primer Apellido*:
                    <input type="text" name="txt_apellido2" id="txt_apellido2" title="Se requiere un apellido para el registro" >
                    Segundo Apellido:
                    <input type="text" name="txt_sapellido2" id="txt_sapellido2">
                    <br><br>
                    Primer Nombre*:
                    <input type="text" name="txt_nombre2" id="txt_nombre2" title="Se requiere un nombre para el registro" >
                    Otros Nombres:
                    <input type="text" name="txt_othername2" id="txt_othername2">
                    <br><br>
                    Correo Electronico*:
                    <input type="email" name="email2" id="email2" title="Ingresa un correo electronico" >
                    Teléfono:
                    <input type="number" name="nmb_phone2" id="nmb_phone2">
                    <br><br>
                    <input type="submit" value="Actualizar" class="btn btn-warning" >
                </div>
            </div>
        </section>
        <br>
    </form>
    <form id="form3" method="post" action="eliminar.php">
        <section class="d-flex justify-content-center">
            <h1 style="background-color: rgb(0, 0, 0); color:rgb(255, 255, 255)">Eliminar </h1>
        </section>
        <section class="d-flex justify-content-center">
            <div class="card col-sm-6 p-3" style="background-color: rgb(221, 234, 225);">
                <div class="mb-3">
                    <h2 style="background-color: rgb(0, 0, 0); color:rgb(255, 255, 255)">Identificación</h2>
                </div>
                <div class="mb-2">
                    Número de identificación*:
                    <input type="number" placeholder="# Documento" name="nmb_identity3" id="nmb_identity3" title="Escribe tu número de identificación" required>

                    <input type="submit" value="Eliminar" class="btn btn-danger" >
                </div>
            </div>
        </section>
        <br>
        <section >
            <div class="card col-sm-12 p-3" style="background-color: rgb(221, 234, 225);">
                <div >
                    <h2 style="background-color: rgb(0, 0, 0); color:rgb(255, 255, 255)">Usuarios registrados</h2>
                    <div >
                        <table class="table table-success table-striped" >
                            <tr border="1">
                                <td>Tipo doc</td>
                                <td>Numero identificación</td>
                                <td>fecha de nacimiento</td>
                                <td>Lugar nacimiento</td>
                                <td>Primer Apellido</td>
                                <td>Segundo Apellido</td>
                                <td>Nombre</td>
                                <td>otros Nombres</td>
                                <td>Correo</td>
                                <td>Teléfono</td>
                            </tr>
                            <?php
                            $sql2="SELECT * from registros";
                            $result=mysqli_query($conexion,$sql2);
                            while($mostrar=mysqli_fetch_array($result)){
                            ?>
                            <tr border="1">
                                <td><?php echo $mostrar['tipoidentificacion'] ?></td>
                                <td><?php echo $mostrar['documento'] ?></td>
                                <td><?php echo $mostrar['fecha'] ?></td>
                                <td><?php echo $mostrar['lugarnacimiento'] ?></td>
                                <td><?php echo $mostrar['primerapellido'] ?></td>
                                <td><?php echo $mostrar['segundoapellido'] ?></td>
                                <td><?php echo $mostrar['primernombre'] ?></td>
                                <td><?php echo $mostrar['otrosnombres'] ?></td>
                                <td><?php echo $mostrar['correo'] ?></td>
                                <td><?php echo $mostrar['telefono'] ?></td>
                            </tr>
                            <?php
                            }
                            ?>


                        </table>
                        
                    </div>
                </div>
            </div>
        </section>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <br>
    </div>
    </div>
    <br>


</body>

</html>