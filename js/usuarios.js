function agregaform(datos){

	d=datos.split('||');

	$('#id').val(d[0]);
	$('#nombreu').val(d[1]);
	
	
}

document.getElementById("actualizadatos").addEventListener("click",actualizarDatos)


function actualizarDatos(e){
    e.preventDefault();
    id=$('#id').val();
	nombre=$('#nombreu').val();
	


	cadena= "id=" + id +
			"&nombre=" + nombre ;
			
            
            $.ajax({
                type:"POST",
                url:"../php/actualizausuario.php",
                data:cadena,
                success:function(r){
                    
                    if(r==1){
                    //    $('#tabla').load('../admin/tabla.php');
                  //      alertify.success("Actualizado con exito :)");
                  alertify.alert("Actualizado con exito.", function(){
                    location.reload();
                });
                    }else{
                        alertify.error("Fallo el servidor :(");
                    }
                }
            });
}