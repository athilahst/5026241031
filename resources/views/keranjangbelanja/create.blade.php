@extends('template')
@section('title', 'Tambah Keranjang Belanja')
@section('konten')

<h2>Tambah Pembelian</h2>

<form action="{{ route('keranjangbelanja.store') }}"
      method="POST">
    @csrf

    <p>
        Kode Barang <br>

        <input type="text"
               name="KodeBarang">
    </p>

    <p>
        Jumlah Pembelian <br>

        <input type="text"
               name="Jumlah">
    </p>

    <p>
        Harga <br>

        <input type="text"
               name="Harga">
    </p>

    <button type="submit">
        Simpan
    </button>

    <a href="{{ route('keranjangbelanja.index') }}">
        Kembali
    </a>

</form>
@endsection
