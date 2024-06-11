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
    .card{
        width: 60%;
        height: 100ppx;
        border-radius: 10px
    }
    #gambarkatalog{
        width: 90%;
        height: 100px;
        align-self: center;
        margin-top: 10px;
        border-radius: 5px
    }
    #deskripsi{
        margin-top: -15px
    }
    .cardbutton{
        width: 100%;
        align-self: center;
        background-color: rgb(255, 153, 0)
    }
    .cardbutton:hover{
        background-color: rgb(180, 99, 0)
    }
</style>
<div class="custom-background">
    <div class="container mt-4">
        <hr>
        <div class="row">
            @foreach ($barang as $barang)
            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="{{ asset($barang->gambar) }}" class="card-img-top" id=gambarkatalog alt="Gambar Barang">
                    <div class="card-body">
                        <h5 class="card-title">{{ $barang->Nama_Barang }}</h5>
                        <p class="card-text">Rp {{ $barang->Harga_Barang }} /{{ $barang->satuan->Nama_Satuan }}</p>
                        <p class="card-text" id="deskripsi">{{ $barang->Deskripsi_Barang }}</p>
                        <a href="{{ route('checkout.show', ['checkout' => $barang->id]) }}" class="btn custom-btn cardbutton">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
