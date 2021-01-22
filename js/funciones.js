function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#serviciou').val(d[2]);
	$('#equipou').val(d[3]);
    $('#descripcionu').val(d[4]);
    $('#estadou').val(d[5]);
	
}

document.getElementById("actualizadatos").addEventListener("click",actualizarDatos)


function actualizarDatos(e){
    e.preventDefault();
    id=$('#idpersona').val();
	nombre=$('#nombreu').val();
	servicio=$('#serviciou').val();
	equipo=$('#equipou').val();
    descripcion=$('#descripcionu').val();
    estado=$('#estadou').val();


	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&servicio=" + servicio +
            "&equipo=" + equipo +
            "&descripcion=" + descripcion +
            "&estado=" + estado;
            
            $.ajax({
                type:"POST",
                url:"../php/actualizaCliente.php",
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

function eliminar(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este usuario?', 
					function(){ eliminarServicio(id) }
                , function(){ alertify.error('Se cancelo')});
}


function eliminarServicio(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"../php/eliminarServicio.php",
			data:cadena,
			success:function(r){
				if(r==1){
					alertify.alert("Servicio eliminado con exito", function(){
                        location.reload();
                    });
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
