

<?php

require_once('../../vendor/autoload.php');
require_once('pdf/reporte/index.php');

$css = file_get_contents('pdf/reporte/style.css');


require_once('../../reporte.php');


$pdf = getPDF($reporte);

$mpdf = new \Mpdf\Mpdf(['tempDir' => '../../../temp']);



$mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($pdf, \Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output();