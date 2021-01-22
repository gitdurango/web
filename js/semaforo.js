consulta("./php/semaforo.php","tabla");
function consulta(file, html){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById(html).innerHTML=this.responseText;
      }
    };
    xhttp.open("GET", file, true);
    xhttp.send();
    console.log ("esta jalando");
  }