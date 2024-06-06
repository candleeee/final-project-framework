<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\BarangExport;

class ExportController extends Controller
{
    public function exportExcel()
    {
        return Excel::download(new BarangExport, 'barang.xlsx');
    }

    public function exportPDF()
    {
        $barang = Barang::all();
        $pdf = Pdf::loadView('exports.barang', compact('barang'));
        return $pdf->download('barang.pdf');
    }
}
