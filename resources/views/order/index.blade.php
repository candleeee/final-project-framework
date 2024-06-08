@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .custom-background {
        background-image: url('https://cdn0-production-images-kly.akamaized.net/2qetjl1N-Dujir0nY3MlkxY1Wwo=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3033787/original/095111500_1580130643-linen-542866_1920.jpg'); /* Path gambar background */
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        padding: 40px 0;
    }
    .custom-table {
        background-color: rgba(255, 255, 255, 0.9); /* Sedikit transparan */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .custom-table thead {
        background-color: rgba(189, 125, 6, 0.493);
        color: white;
    }
    .custom-table tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }
    .custom-table tbody tr:hover {
        background-color: #f1f1f1;
    }
    .custom-table img {
        max-width: 100px;
        border-radius: 5px;
    }
    .custom-btn {
        margin-bottom: 10px;
    }
</style>
<div class="custom-background">
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
            </div>
            <div class="col-lg-3 col-xl-2 d-flex align-items-center justify-content-end">
                <a href="{{ route('export.excel') }}" class="btn btn-success me-2 custom-btn">Export to Excel</a>
                <a href="{{ route('export.pdf') }}" class="btn btn-danger me-2 custom-btn">Export to PDF</a>
                <a href="{{ route('checkout.create') }}" class="btn btn-warning btn-primary custom-btn">Create Order</a>
            </div>
        </div>
        @vite('resources/css/card.css')
        <hr>
        <div class="table-responsive border p-3 rounded-3 custom-table">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <table class="table table-bordered table-hover table-striped mb-0">
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
                        <td><img src="{{ asset($barang->gambar) }}" alt="Gambar Barang"></td>
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
</div>
@endsection
