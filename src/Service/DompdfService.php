<?php

namespace App\Service;

use Dompdf\Dompdf;
use Twig\Environment;

class DompdfService
{
    public function __construct(
        private Environment $twig,
    ) {
    }

    public function genereatePdf($html)
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
    }
}
