<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Barang;
use App\Models\Satuan;

class CheckoutController extends Controller
{
    public function index()
    {
        $pageTitle = 'Checkout';
        $barangs = Barang::all();

        return view('order.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);
    }

    public function create()
    {
        $pageTitle = 'Create Order';
        $satuans = Satuan::all();
        return view('order.create', compact('pageTitle', 'satuans'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:barangs,Kode_Barang',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'satuan_id' => 'required', // Pastikan satuan_id tidak boleh kosong
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $barang = new Barang;
        $barang->Kode_Barang = $request->kode;
        $barang->Nama_Barang = $request->nama;
        $barang->Harga_Barang = $request->harga;
        $barang->Deskripsi_Barang = $request->deskripsi;
        $barang->satuan_id = $request->satuan_id; // Pastikan nilai satuan_id sesuai dengan yang dipilih
        $barang->save();

        return redirect()->route('checkout.index');
    }

    public function show($id)
    {
        $pageTitle = 'Show';
        $barang = Barang::find($id);
        return view('order.show', compact('pageTitle', 'barang'));
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Order';
        $satuans = Satuan::all();
        $barang = Barang::find($id);
        return view('order.edit', compact('pageTitle', 'satuans', 'barang'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:barangs,Kode_Barang,' . $id,
            'nama' => 'required',
            'harga' =>'required|numeric',
            'deskripsi' => 'required',
            'satuan_id' => 'required', // Pastikan satuan_id tidak boleh kosong
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $barang = Barang::find($id);
        $barang->Kode_Barang = $request->kode;
        $barang->Nama_Barang = $request->nama;
        $barang->Harga_Barang = $request->harga;
        $barang->Deskripsi_Barang = $request->deskripsi;
        $barang->satuan_id = $request->satuan_id; // Pastikan nilai satuan_id sesuai dengan yang dipilih
        $barang->save();

        return redirect()->route('checkout.index')->with('success', 'Order has been updated successfully.');
    }

    public function destroy($id)
    {
        Barang::find($id)->delete();
        return redirect()->route('checkout.index');
    }
}
