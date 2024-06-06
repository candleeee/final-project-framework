@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container mt-4">
    <div class="row mb-0">
        <div class="col-lg-9 col-xl-10">
        </div>
        <div class="col-lg-3 col-xl-2 d-flex align-items-center justify-content-end">
            <a href="{{ route('export.excel') }}" class="btn btn-success me-2">Export to Excel</a>
            <a href="{{ route('export.pdf') }}" class="btn btn-danger me-2">Export to PDF</a>
            <a href="{{ route('checkout.create') }}" class="btn btn-warning btn-primary">Create Order</a>
        </div>
    </div>
    @vite('resources/css/card.css')
    <hr>
    <div class="table-responsive border p-3 rounded-3">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table table-bordered table-hover table-striped mb-0 bg-white">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Deskripsi Barang</th>
                    <th>Gambar Barang</th>
                    <th>Satuan Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $barang)
                <tr>
                    <td>{{ $barang->Kode_Barang }}</td>
                    <td>{{ $barang->Nama_Barang }}</td>
                    <td>{{ $barang->Harga_Barang }}</td>
                    <td>{{ $barang->Deskripsi_Barang }}</td>
                    <td><img src="{{ asset($barang->gambar) }}" alt="Gambar Barang" style="max-width: 100px;"></td>
                    <td>{{ $barang->satuan->Nama_Satuan }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('checkout.show', ['checkout' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-eye-fill"></i></a>
                            <a href="{{ route('checkout.edit', ['checkout' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-pencil-fill"></i></a>
                            <form action="{{ route('checkout.destroy', ['checkout' => $barang->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
