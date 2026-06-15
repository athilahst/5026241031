@extends('template')
@section('title', 'View Data Karyawan')
@section('konten')

<div class="container mt-5">

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Kode Soal mykaryawan</h1>
        </div>
    </div>

    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            Form View Data Karyawan
        </div>

        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label fw-bold">Kode Karyawan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext bg-light px-2 rounded" value="{{ $karyawan->kodepegawai }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label fw-bold">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext bg-light px-2 rounded" value="{{ $karyawan->namalengkap }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label fw-bold">Divisi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext bg-light px-2 rounded" value="{{ $karyawan->divisi }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label fw-bold">Departemen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext bg-light px-2 rounded" value="{{ $karyawan->departemen }}" readonly>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
