<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $pageTitle = 'Checkout';
        $barangs = Barang::all();

        return view('katalog', [
            'pageTitle' => $pageTitle,
            'barang' => $barangs
        ]);
    }
}
