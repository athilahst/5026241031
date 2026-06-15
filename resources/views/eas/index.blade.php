<!--Menghubungkan dengan view tempalte-->
@extends('template')
@section('title', 'Kode Soal mykaryawan')
@section('konten')

<h2>Kode Soal mykaryawan</h2>

 <br><br>

        <br />
        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Opsi</th>
            </tr>

            @foreach ($mykaryawan as $row)
                <tr>
                    <td>{{ $row->kodepegawai }}</td>
                    <td>{{ $row->namalengkap }}</td>
                    <td>{{ $row->divisi }}</td>
                    <td>{{ $row->departemen }}</td>
                    <td>
                        <a href="/easedit/{{ $row->kodepegawai }}" class="btn btn-warning">View</a>
                    </td>
                </tr>
            @endforeach
        </table>


@endsection
