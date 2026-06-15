<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class MyKaryawanController extends Controller
{
    public function index()
    {
        $mykaryawan = DB::table('mykaryawan')->orderBy('kodepegawai')->get();
        return view('eas.index', compact('mykaryawan'));
    }

   public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('eas.edit',['karyawan' => $mykaryawan]);

	}


}
