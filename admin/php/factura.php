<?php
include('conexion.php');

$query = mysqli_query($enlace,"SELECT * FROM `clientes`");

echo '
<table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Nombre del servicio/producto</th>
                <th scope="col">Anticipo</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
';
while ($row= mysqli_fetch_array($query) ) {
      echo '<tr> 
      <th scope="row">1</th>
      <td>'.$row['Nombre'].'</td>
      <td>'.$row['Descripcion'].'</td>
      <td>'.$row['Anticipo'].'</td>
      <td>'.$row['Estimado'].'</td>
      </tr>
      ';
}

echo '</tbody>
</table>
';
mysqli_close($enlace);
?>
