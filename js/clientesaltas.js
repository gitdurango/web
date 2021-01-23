document.getElementById("btnenviar").addEventListener("click",insertacita)
function insertacita(e) {
    e.preventDefault();
    let formulario=document.querySelector("#modalContactForm")
    let datos=new FormData(formulario);
    datos.append("ajax",2)
    console.log([...datos])
    var notification = alertify.notify('Se subio de manera correcta', 'success', 5, function(){  console.log('dismissed'); });

    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //alert("Se ha añadido la cita")
    }
  };
  xhttp.open("POST", "../admin/php/altasservicios.php", true);
  xhttp.send(datos);
}
