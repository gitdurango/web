<?php
include('conexion.php');
$nombre=isset($_POST['Nombre'])?$_POST['Nombre']:1;
$numeroservicio=$_POST['Servicio'];
echo $nombre;
$query = mysqli_query($enlace,"SELECT * FROM `clientes` WHERE 'Nombre' = '$nombre'   ");

echo '
<table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Equipo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody>
';
$contador=0;
while ($row= mysqli_fetch_array($query) ) {
      $contador++;
      $imagensemaforo="";
      if($row ['Estado'] == 1) {
       $imagensemaforo="<img src='../GIT/img/circulorojo.png'>";
      }else
      if($row ['Estado'] == 2) {
        $imagensemaforo="<img src='../GIT/img/circuloamarillo.png'>";
      }else{
        $imagensemaforo="<img src='../GIT/img/circuloverde.png'>";
    }
      echo '<tr> 
      <th scope="row">'.$contador.'</th>
      <td>'.$row['Equipo'].'</td>
      <td>'.$row['Descripcion'].'</td>
      <td>'.$imagensemaforo.'</td>
      </tr>
      ';

}

echo '</tbody>
</table>
';
mysqli_close($enlace);

?>
