<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonaCertificado;
use PDF;
use Carbon\Carbon;

class PDFController extends Controller
{
    public function printPDF($id)
    {
        $personaCertificado = PersonaCertificado::where('id',$id)->firstOrFail();
        $pdf = PDF::loadView('pdf.document', compact('personaCertificado'))->setPaper('a4', 'landscape');;
        return $pdf->stream('document.pdf');
    }
}
