<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class Reportes extends Controller
{
    //
    public function factura()
    {
        $pdf = PDF::loadView('Reportes.factura'/*, compact('') */)
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }
    
    public function reporteUno()
    {
        $pdf = PDF::loadView('Reportes.reporteUno'/*, compact('') */)
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }
}
