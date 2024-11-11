<?php
ob_start();

require('OpcionesCreados.php');

$html = ob_get_clean();

require 'vendor/autoload.php';
use Dompdf\Dompdf;

if (isset($_POST['opciones']) && !empty($_POST['opciones'])) {
    $html = '<h1>Carreras Selecionadas</h1>';
    $html .= '<ul>';
    foreach ($_POST['opciones'] as $opcion) {
        $html .= '<li>' . htmlspecialchars($opcion) . '</li>';
    }
    $html .= '</ul>';
}
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadhtml($html);

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("MisOpciones.pdf", array('Attachment'=> false)); //true para descargar y con false abre el navegador xD

?>