@extends('layouts.app')
@include('sweetalert::alert')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
<<<<<<< HEAD
            <img src="{{url ('images/logo02.png')}}" class="rounded mx-auto d-block" width="700" alt="">
        </div>
    @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card">
=======
            <img src="{{url ('images/logo.png')}}" class="rounded mx-auto d-block" width="300" alt="">
        </div>
    @foreach($barangs as $barang)
        <div class="col-md-3">
            <div class="card">

>>>>>>> 4ce0b05afcf35b8e19b2398bcda9d6ba15252bc2
              <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }} 
                </p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection
