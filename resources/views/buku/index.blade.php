@extends('template')
@section('title', 'Data Buku')
@section('konten')
    <h2>Data Buku</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table class="table table-striped table-hover">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Ketersediaan</th>
            <th>Pinjam</th>
        </tr>

        @foreach ($buku as $row)
            <tr>
                <td>{{ $row->judul }}</td>
                <td>{{ $row->penulis }}</td>
                <td>{{ $row->tahun }}</td>
                <td>
                    @if ($row->tahun >= date('Y') - 5)
                        Baru
                    @else
                        Lama
                    @endif
                </td>
                <td>
                    @if ($row->sedang_dipinjam == true)
                        Tidak Tersedia
                    @else
                        Tersedia
                    @endif
                </td>
                <td>
                    @if ($row->sedang_dipinjam == false)
                        <form action="{{ route('buku.pinjam', $row->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <button class="btn btn-primary">
                                Pinjam
                            </button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    @endsection
