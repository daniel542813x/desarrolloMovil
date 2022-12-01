let bd=[]

function add(){
    let nombre = document.getElementById("txt_nombres").value
    bd.push(nombre)
   
   let cad="";
   bd.forEach(objActual =>cad=cad+objActual+" <br> ");  

   document.getElementById("divmostrar").innerHTML= cad

}