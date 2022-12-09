<?php
$conexion = mysqli_connect('localhost', 'root', '6aaf57025705c786', 'usuarios');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo Móvil 2022 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<style>
    
</style>

<body>


    <form id="form1" method="post" action="registrar.php">
        <section class="d-flex justify-content-center">
            <h1 >Registro de Usuarios </h1>
        </section>
        <section class="d-flex justify-content-center">
            <div class="card col-sm-6 p-3" ">

                <div class="mb-2">

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tipo de Documento:</label>
                            <select name="tipodoc" id="tipodoc" class="form-select">
                                <option value="cc">Cédula de Ciudadanía</option>
                                <option value="ti">Tarjeta de identidad</option>
                                <option value="ce">Cédula de Extranjería</option>
                                <option value="pas">Pasaporte</option>
                                <option value="nit">NIT</option>
                            </select>
                        </div>


                        <div class="col-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Número de identificación*:</label>
                            <input type="number" class="form-control" placeholder="# Documento" name="nmb_identity" id="nmb_identity" title="Escribe tu número de identificación" required>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento* :</label>
                            <input type="date" class="form-control" name="dt_nacimiento" id="dt_nacimiento" title="Fecha de nacimiento" required>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Lugar de nacimiento:</label>
                            <input type="text" class="form-control" name="txt_counacimiento" id="txt_counacimiento">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Primer Apellido*:</label>
                            <input type="text" class="form-control" name="txt_apellido" id="txt_apellido" title="Se requiere un apellido para el registro" required>
                        </div>


                        <div class="col-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Segundo Apellido:</label>
                            <input type="text" class="form-control" name="txt_sapellido" id="txt_sapellido">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Primer Nombre*:</label>
                            <input type="text" class="form-control" name="txt_nombre" id="txt_nombre" title="Se requiere un nombre para el registro" required>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Otros Nombres:</label>
                            <input type="text" class="form-control" name="txt_othername" id="txt_othername">
                        </div>


                        <div class="col-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electronico*:</label>
                            <input type="email" class="form-control" name="email" id="email" title="Ingresa un correo electronico" required>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Teléfono:</label>
                            <input type="number" class="form-control" name="nmb_phone" id="nmb_phone">
                        </div>

                        <input type="button" class="btn btn-success" value="Registrar" onclick="registrar()" class="btn btn-success"> campos obligatorios (*)

                    </div>

                </div>
            </div>
        </section>
        <br>

    </form>





    <div class="row justify-content-center">
        
        <div id="tablaMostrar" class="col-auto  ">

        </div>
    </div>




    <!-- ****************************Modal**********************************-->

    <div class="modal modal-lg " tabindex="-1" id="ModalEditar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualizar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">

                    <div class="row">

                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tipo de Documento:</label>
                            <select name="tipodocE" id="tipodocE" class="form-select">
                                <option value="ti">Tarjeta de identidad</option>
                                <option value="cc">Cédula de Ciudadanía</option>
                                <option value="ce">Cédula de Extranjería</option>
                                <option value="pas">Pasaporte</option>
                                <option value="nit">NIT</option>
                            </select>
                        </div>


                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Número de identificación*:</label>
                            <input type="hidden" name="ducmentoAnterior" id="ducmentoAnterior" >
                            <input type="number" class="form-control" placeholder="# Documento" name="nmb_identityE" id="nmb_identityE" title="Escribe tu número de identificación" required>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento* :</label>
                            <input type="date" class="form-control" name="dt_nacimientoE" id="dt_nacimientoE" title="Fecha de nacimiento" required>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Lugar de nacimiento:</label>
                            <input type="text" class="form-control" name="txt_counacimientoE" id="txt_counacimientoE">
                        </div>

                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Primer Apellido*:</label>
                            <input type="text" class="form-control" name="txt_apellidoE" id="txt_apellidoE" title="Se requiere un apellido para el registro" required>
                        </div>


                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Segundo Apellido:</label>
                            <input type="text" class="form-control" name="txt_sapellidoE" id="txt_sapellidoE">
                        </div>

                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Primer Nombre*:</label>
                            <input type="text" class="form-control" name="txt_nombreE" id="txt_nombreE" title="Se requiere un nombre para el registro" required>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Otros Nombres:</label>
                            <input type="text" class="form-control" name="txt_othernameE" id="txt_othernameE">
                        </div>


                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electronico*:</label>
                            <input type="email" class="form-control" name="emailE" id="emailE" title="Ingresa un correo electronico" required>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Teléfono:</label>
                            <input type="number" class="form-control" name="nmb_phoneE" id="nmb_phoneE">
                        </div>



                    </div>

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="actualizar()" data-bs-dismiss="modal">Actualizar</button>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <br>
    </div>
    </div>
    <br>

    <script src="./script.js"></script>

</body>

</html>