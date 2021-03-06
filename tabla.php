<!doctype html>
<html lang="es-MX">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />

     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">

    <!-- Ionic Icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <title>GIT TECNOLOGIAS</title>
</head>

<body>
    <main class="bg-image-y bg-image-x">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="#">GIT TECNOLOGIAS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="./index.html">Inicio</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="./productos.html">Productos</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="./servicios.html">Servicios</a>
                        </li>
                            <a class="nav-link text-light font-weight-bold" href="./contactanos.html">Contáctanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="bg-image-y">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="#">ESTATUS DE SU EQUIPO (GITECNOLOGIAS)</a>
                    <div class="row">
                        <br>
                        <div class="col">
                            <span id="tabla"></span>
                        </div>
                        </div>
                    </div>
        </section>
             <?php
                include ("./admin/php/conexion.php");
                $nombre=isset($_POST['Nombre'])?$_POST['Nombre']:1;
                $numeroservicio=$_POST['Servicio'];
                $query = mysqli_query($enlace,"SELECT * FROM `clientes` WHERE Nombre='$nombre' AND Servicio=$numeroservicio" );

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
      }else if($row ['Estado'] == 3){
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
        <img src="img/semaforo1.png" id="imagensemaforo">
    </main>
    
    <footer class="bg-dark-x py-5 border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="mb-0">Domicilio: <a href="" class="text-primary font-weight-bold">Nazas 619, Valle del Guadiana, 34166 Durango, MX</a></p>
                     <p class="mb-0"> Ciudad:<a href="" class="text-primary font-weight-bold">Durango,Durango. Mexico</a></p>
                     <p class="mb-0">Teléfono: <a href="" class="text-primary font-weight-bold">618 2353619</a></p>
                      
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3"><small>Síguenos en:</small></li>
                        <li class="list-inline-item mr-3"><i class="icon ion-logo-instagram lead"></i></li>
                        <li class="list-inline-item mr-3"><i class="icon ion-logo-linkedin lead"></i></li>
                        <li class="list-inline-item"><i class="icon ion-logo-facebook lead"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</body>

</html>
