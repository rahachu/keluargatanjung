<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Anggota;
use Image;

class AnggotaController extends Controller
{
    public function index()
    {
        // contoh mengambil data anggota
        $anggota = Anggota::all();
        return view('welcome',['anggota'=>$anggota]);
    }
    public function registrasi(Request $request)
    {
        // mendaftarkan anggota
        $input=$request->all();
        Anggota::create($input);

        return $input;
    }
}
