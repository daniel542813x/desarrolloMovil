let bd=[]

function add(){
    let nombre = document.getElementById("txt_nombres").value
    bd.push(nombre)
   
   mostrar()

}

function eliminar(){
    let nombre = document.getElementById("txt_nombres").value
    bd=bd.filter((i)=>i!==nombre)


    mostrar()
}

function mostrar(){
    let cad="";
   bd.forEach(objActual =>cad=cad+objActual+" <br> ");  

   document.getElementById("divmostrar").innerHTML= cad
}