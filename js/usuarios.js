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
                url:"./actualizausuario.php",
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

document.getElementById("guardarnuevo").addEventListener("click",agregarUsuario)


function agregarUsuario(e){
    e.preventDefault();
    nombre=$('#nombre').val();
	password=$('#password').val();
	cadena="nombre=" + nombre + 
			"&password=" + password;

	$.ajax({
		type:"POST",
		url:"./agregarUsuario.php",
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

function eliminar(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este usuario?', 
					function(){ eliminarUsuario(id) }
                , function(){ alertify.error('Se cancelo')});
}


function eliminarUsuario(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"./eliminarUsuario.php",
			data:cadena,
			success:function(r){
				if(r==1){
					alertify.alert("Usuario eliminado con exito", function(){
                        location.reload();
                    });
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
