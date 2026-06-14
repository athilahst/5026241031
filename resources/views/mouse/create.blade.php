@extends('template')
@section('title', 'Tambah Data Mouse')
@section('konten')

    <h2>Tambah Data Mouse</h2>
    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mouse.store') }}" method="POST">
        @csrf

        <p>
            <label>Merk Mouse</label><br>
            <input type="text" name="merkmouse" maxlength="30" value="{{ old('merkmouse') }}">
        </p>

        <p>
            <label>Stock Mouse</label><br>
            <input type="number" name="stockmouse" value="{{ old('stockmouse') }}">
        </p>

        <p>
            <label>Tersedia (Y/T)</label><br>
            <input type="text" name="tersedia" maxlength="1" value="{{ old('tersedia') }}">
        </p>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('mouse.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>

@endsection
