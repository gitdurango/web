<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$proveedor=$_POST['proveedor'];
$precio=$_POST['precio'];
$nombreArchivo = $_FILES['archivo']['name'];
$guardado = $_FILES['archivo']['tmp_name'];

move_uploaded_file($guardado, "../../img/". $nombreArchivo);

/*if(!file_exists('img')){
    mkdir('img',0777,true);
    if(file_exists('img')){
        if(move_uploaded_file($guardado,'img/'.$nombreArchivo)){
            echo "Se subio con exito";
            move_uploaded_file($guardado,'img/'.$nombreArchivo);
        }else{
            echo "No se pudo subir el archivo";
        }
    }else{
        if(move_uploaded_file($guardado,'img/'.$nombreArchivo)){
            echo "Se subio con exito";
            move_uploaded_file($guardado,'img/'.$nombreArchivo);
        }else{
            echo "No se pudo subir el archivo";
        }
    }
}
*/
$sql = "INSERT INTO productos (nombre, descripcion, proveedor, precio, imagen ) VALUES ('$nombre', '$descripcion', '$proveedor', '$precio','$nombreArchivo' );";
if(mysqli_query($enlace,$sql)){
    echo "Cliente agregado correctamente";
}else{
    echo "Algo salio mal";
}
myqli_close($enlace);
?>
