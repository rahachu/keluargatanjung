<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Anggota;
use App\Avatar;
use Image;

class AnggotaController extends Controller
{
    public function index()
    {
        // contoh mengambil data anggota
        $anggota = Anggota::all();
        $avatars=[];
        foreach ($anggota as $a) {
            // $avatars[$a->panggilan]=$a->avatars()->first();
            $avatars[$a->panggilan]['newHeight']=$a->avatars()->first()['newHeight']/1.60;
            $avatars[$a->panggilan]['newWidth']=$a->avatars()->first()['newWidth']/1.60;
            $avatars[$a->panggilan]['x']=($a->avatars()->first()->x/$a->avatars()->first()['newWidth'])*$avatars[$a->panggilan]['newWidth'];
            $avatars[$a->panggilan]['y']=($a->avatars()->first()['y']/$a->avatars()->first()['newHeight'])*$avatars[$a->panggilan]['newHeight'];
            $avatars[$a->panggilan]['gambar']=base64_encode($a->avatars()->first()['gambar']);
        }
        return view('welcome',['anggota'=>$anggota,'avatars'=>$avatars]);
    }
    public function registrasi(Request $request)
    {
        // mendaftarkan anggota
        $input=$request->all();
        //mencoba menggunakan blob
        // $gambar=Image::make($input['file'])->resize(null,90,function($constraint){
        //     $constraint->aspectRatio();
        // })->encode('png');
        // $input['gambar']=$gambar;
        // Avatar::create($input);
        // Anggota::create($input);
        // $gambar=$input['file'];
        // $gambar->move(public_path('avatar'),$input['panggilan'].'.png');

        return 'sukses';
    }
}
