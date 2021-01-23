document.getElementById("btnAgregar").addEventListener("click",agregarUsuario)
/*function insertacita(e) {
    e.preventDefault();
    let formulario=document.querySelector("#modalContactForm")
    let datos=new FormData(formulario);
    datos.append("ajax",2)
    console.log([...datos])
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     console.log("Works!")
     alert("Se ha añadido la cita")
    }
  };
  xhttp.open("POST", "./admin/php/altascitas.php", true);
  xhttp.send(datos);
}
*/
/*
function insertacita(e){
  e.preventDefault();
  nombre=$('#nombre').val();
  email=$('#email').val();
  asunto=$('#asunto').val();
  mensaje=$('#mensaje').val();
cadena="nombre=" + nombre + 
    "&email=" + email +
    "&asunto=" +asunto+
    "&mensaje=" +mensaje;
$.ajax({
  type:"POST",
  url:"./admin/php/altascitas.php",
  data:cadena,
  success:function(r){
    if(r==1){
      alertify.alert("Usuario agregado con exito.", function(){
                  //location.reload();
              });
    }else{
      alertify.error("Fallo el servidor :(");
    }
  }
});

}
*/


function agregarUsuario(e){
  e.preventDefault();
 nombre=$('#nombre').val();
 email=$('#email').val();
 asunto=$('#asunto').val();
 mensaje=$('#mensaje').val();

cadena="nombre=" + nombre + 
    "&email=" + email+
    "&asunto=" + asunto+
    "&mensaje=" + mensaje;

$.ajax({
  type:"POST",
  url:"./admin/php/altascitas.php",
  data:cadena,
  success:function(r){
    if(r==1){
      alertify.alert("Usuario agregado con exito.", function(){
                  location.reload();
              });
    }else{
      alertify.error("Fallo el servidor :(");
    }
  }
});

}