<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Presensi;

class ExportController extends Controller
{
    //
    public function PDF( Presensi $presensi)
    {
        $presensi = Presensi::all();
        $pdf = PDF::loadView('presensi.pdf', compact('presensi'))->output();
    
        return response($pdf, 200)
        ->header('Content-Type', 'application/pdf')
        ->header('Content-Disposition', 'attachment; filename="presensi.pdf');
    }
}
