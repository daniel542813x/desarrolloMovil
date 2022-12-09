refrescar();
function registrar(){

    let tipoDocumento=document.getElementById("tipodoc").value;
    let numeroDocumento=document.getElementById("nmb_identity").value;
    let fechaNacimiento=document.getElementById("dt_nacimiento").value;
    let lugarNacimiento=document.getElementById("txt_counacimiento").value;
    let primerApellido=document.getElementById("txt_apellido").value;
    let segundoApellido=document.getElementById("txt_sapellido").value;
    let primerNombre=document.getElementById("txt_nombre").value;
    let segundoNombre=document.getElementById("txt_othername").value;
    let email=document.getElementById("email").value;
    let numeroTelefono=document.getElementById("nmb_phone").value;


    url="registrar.php"
    data={
        tipoDocumento:tipoDocumento,
        numeroDocumento:numeroDocumento,
        fechaNacimiento:fechaNacimiento,
        lugarNacimiento:lugarNacimiento,
        primerApellido:primerApellido,
        segundoApellido:segundoApellido,
        primerNombre:primerNombre,
        segundoNombre:segundoNombre,
        email:email,
        numeroTelefono:numeroTelefono
    }

    fetch(url, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers:{
          'Content-Type': 'application/json',
          'Access-Control-Allow-Origin': '*',
        }
      }).then(res => res.text())
      .catch(error => console.error('Error:', error))
      .then(function(response){console.log('Success:', response);refrescar();});
      

    document.getElementById("tipodoc").value="";
    document.getElementById("nmb_identity").value="";
    document.getElementById("dt_nacimiento").value="";
    document.getElementById("txt_counacimiento").value="";
    document.getElementById("txt_apellido").value="";
    document.getElementById("txt_sapellido").value="";
    document.getElementById("txt_nombre").value="";
    document.getElementById("txt_othername").value="";
    document.getElementById("email").value="";
    document.getElementById("nmb_phone").value="";
}

function refrescar(){
    url="mostrar.php"
    fetch(url, {
        method: 'GET', // or 'PUT'
        headers:{}
      }).then(res => res.json())
      .catch(error => console.error('Error:', error))
      .then(function(response) {
        console.log('Success:', response);
        let cadena=`
        <table class="table">
                            <tr border="1">
                                <td>Tipo doc</td>
                                <td>Num. identificación</td>
                                <td>Fecha de nacimiento</td>
                                <td>Lugar nacimiento</td>
                                <td>Nombres</td>
                                <td>Correo</td>
                                <td>Teléfono</td>
                                <td>Acción</td>
                            </tr>
        `;
        response.forEach(element => {
            cadena+=`
            <tr>
                <td>${element.tipoidentificacion}</td>
                <td>${element.documento}</td>
                <td>${element.fecha}</td>
                <td>${element.lugarnacimiento}</td>
                <td>                
                ${element.primernombre}
                ${element.otrosnombres}
                ${element.primerapellido} 
                ${element.segundoapellido}</td>
                <td>${element.correo}</td>
                <td>${element.telefono}</td>
                <td ><button class="btn btn-warning" width='10' onclick="editarUsuario(${element.documento})" data-bs-toggle="modal" data-bs-target="#ModalEditar"><img  src="./src/pencil-fill.svg" alt="" ></button> 
                <button class="btn btn-danger" onclick="eliminar(${element.documento})" ><img src="./src/trash.svg" alt=""></button>                
                </td>
            </tr>
            `
        });


        cadena+="</table>"
        document.getElementById("tablaMostrar").innerHTML=cadena;

      } );
}

function editarUsuario(cedula){
    data={cedula:cedula}
    url="buscar.php"
    fetch(url, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers:{
          'Content-Type': 'application/json',
          'Access-Control-Allow-Origin': '*',
        }
      }).then(res => res.json())
      .catch(error => console.error('Error:', error))
      .then(function(response){
        console.log('Success:', response);
        
        document.getElementById("tipodocE").value=response[0].tipoidentificacion;
        document.getElementById("nmb_identityE").value=response[0].documento;
        document.getElementById("ducmentoAnterior").value=response[0].documento;
        document.getElementById("dt_nacimientoE").value=response[0].fecha;
        document.getElementById("txt_counacimientoE").value=response[0].lugarnacimiento;
        document.getElementById("txt_apellidoE").value=response[0].primerapellido;
        document.getElementById("txt_sapellidoE").value=response[0].segundoapellido;
        document.getElementById("txt_nombreE").value=response[0].primernombre;
        document.getElementById("txt_othernameE").value=response[0].otrosnombres;
        document.getElementById("emailE").value=response[0].correo;
        document.getElementById("nmb_phoneE").value=response[0].telefono;
        /*refrescar();*/
    
    });
    
}
function eliminar(cedula){

    data={cedula:cedula}
    url="eliminar.php"
    fetch(url, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers:{
          'Content-Type': 'application/json',
          'Access-Control-Allow-Origin': '*',
        }
      }).then(res => res.text())
      .catch(error => console.error('Error:', error))
      .then(function(response){console.log('Success:', response);refrescar();});
}

function actualizar(){
    let tipoDocumento=document.getElementById("tipodocE").value;
    let numeroDocumento=document.getElementById("nmb_identityE").value;
    let numeroDocumentoAnterior=document.getElementById("ducmentoAnterior").value;
    let fechaNacimiento=document.getElementById("dt_nacimientoE").value;
    let lugarNacimiento=document.getElementById("txt_counacimientoE").value;
    let primerApellido=document.getElementById("txt_apellidoE").value;
    let segundoApellido=document.getElementById("txt_sapellidoE").value;
    let primerNombre=document.getElementById("txt_nombreE").value;
    let segundoNombre=document.getElementById("txt_othernameE").value;
    let email=document.getElementById("emailE").value;
    let numeroTelefono=document.getElementById("nmb_phoneE").value;


    url="actualizar.php"
    data={
        tipoDocumento:tipoDocumento,
        numeroDocumento:numeroDocumento,
        documentoAnterior:numeroDocumentoAnterior,
        fechaNacimiento:fechaNacimiento,
        lugarNacimiento:lugarNacimiento,
        primerApellido:primerApellido,
        segundoApellido:segundoApellido,
        primerNombre:primerNombre,
        segundoNombre:segundoNombre,
        email:email,
        numeroTelefono:numeroTelefono
    }
    console.log("info: "+data.tipoDocumento,data.email)
    fetch(url, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers:{
          'Content-Type': 'application/json',
          'Access-Control-Allow-Origin': '*',
        }
      }).then(res => res.text())
      .catch(error => console.error('Error:', error))
      .then(function(response){console.log('Success:', response);refrescar();});
}