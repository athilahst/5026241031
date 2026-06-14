@extends('template')
@section('title', 'Data Mouse')
@section('konten')

    <h2>Data Mouse</h2>
    <a href="{{ route('mouse.create') }}">
        Tambah Data Mouse
    </a>

    <br><br>

    <table class="table table-striped table-hover">

        <tr>
            <th>Kode Mouse</th>
            <th>Merk Mouse</th>
            <th>Stock Mouse</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @foreach ($mouse as $m)
            <tr>
                <td>{{ $m->kodemouse }}</td>
                <td>{{ $m->merkmouse }}</td>
                <td>{{ $m->stockmouse }}</td>
                <td>
                    @if ($m->tersedia == 'Y')
                        Ya
                    @else
                        Tidak
                    @endif
                </td>

                <td>
                    <a href="{{ route('mouse.edit', $m->kodemouse) }}" class="btn btn-warning">
                        Edit
                    </a>

                    <form action="{{ route('mouse.destroy', $m->kodemouse) }}" method="POST" style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

@endsection
