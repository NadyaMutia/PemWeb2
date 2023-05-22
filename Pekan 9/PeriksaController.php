<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    public function index()
    {
        return view('periksa/index');
    }

    public function data(Request $request)
    {
        $nama = $request->input('nama');
        $tanggal = $request->input('tanggal');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $jk = $request->input('jk');
        return view('periksa/data',
            ['nama'=>$nama, 'tanggal'=>$tanggal, 'tanggal_lahir'=>$tanggal_lahir, 'jk'=>$jk]);
    }

}
