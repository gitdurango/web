document.getElementById("estado").addEventListener("click",insertacita)
function insertacita(e) {
    e.preventDefault();
    let formulario=document.querySelector("#estatus1")
    let datos=new FormData(formulario);
    datos.append("ajax",2)
    console.log([...datos])
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     console.log("esta jalando")
    }
  };
  xhttp.open("POST", "./php/altascitas.php", true);
  xhttp.send(datos);
}
