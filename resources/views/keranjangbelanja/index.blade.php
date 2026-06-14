@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <h2>Keranjang Belanja</h2>

    <a href="{{ route('keranjangbelanja.create') }}" class="btn btn-primary">
        Beli
    </a>

    <br><br>
    <table class="table table-striped">

        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @foreach ($keranjang as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>

                <td>
                    {{ number_format($k->Harga, 0, ',', '.') }}
                </td>

                <td>
                    {{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}
                </td>

                <td>
                    <form action="{{ route('keranjangbelanja.destroy', $k->ID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Batal
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
