  <?php

function getPDF($reporte){
  $reportePDF = '
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="pdf/img/logo.jpg" width="110" heigth="110">
      </div>
      <div id="company">
        <h2 class="name">GIT TECNOLOGÍAS Y REPARACIÓN</h2>
        <div>Calle Nazas 619, Valle del Guadiana, 34166 Durango, Dgo.</div>
        <div>618 235 3619</div>
        <div><a href="mailto:gittecnologias.rs@gmail.com
        ">gittecnologias.rs@gmail.com
        </a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="invoice">
          <h1>REGISTRO DE PRODUCTOS</h1>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>';

          foreach($reporte as $rp){
          $reportePDF.= '<tr>
            <td class="no">'.$rp["id"].'</td>
            <td class="desc"><h3>'.$rp["nombre"].'</h3></td>
            <td class="unit">'.$rp["descripcion"].'</td>
            <td class="qty">'.$rp["proveedor"].'</td>
            <td class="total">'.$rp["precio"].'</td>
          </tr>';
          }
          $reportePDF .='
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>$5,200.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">IVA 16%</td>
            <td>$1,300.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TOTAL</td>
            <td>$6,500.00</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Reporte</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Recuerde comprobar sus productos e inventario de manera constante</div>
      </div>
    </main>
    <footer>
      GIT TECNOLOGÍAS Y REPARACIÓN
    </footer>
  </body>';

  return $reportePDF;

}

  