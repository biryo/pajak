<?php
// menyertakan autoloader
require_once 'dompdf/autoload.inc.php';

// mengacu ke namespace DOMPDF
use Dompdf\Dompdf;

// menggunakan class dompdf
$dompdf = new Dompdf();


$html = file_get_contents("http://localhost/pjak/pdf/cetak_presto/50");
$dompdf->loadHtml($html);

// (Opsional) Mengatur ukuran kertas dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');

// Menjadikan HTML sebagai PDF
$dompdf->render();

// Output akan menghasilkan PDF (1 = download dan 0 = preview)
$dompdf->stream("Codingan",array("Attachment"=>0));
?>