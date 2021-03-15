<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\dbar;
use App\Models\dpegawai;

class Controller extends BaseController
{
    public function index() {
        $hasil = Post::all()->skip(0)->take(7);
        $hasil2 = Post::paginate(4);
        $data = ['liat' => $hasil,'liat2' => $hasil2];
        return view('index',$data);
       }
       public function tentang() {
        $hasilbarulagi = Post::all()->skip(7)->take(4);
        return view('about',['abot'=> $hasilbarulagi]);
       }
       public function kontak() {
        return view('contact');
       }
       public function Daftar_Barang() {
        $hasilbarang = dbar::all();
        return view('Daftar_Barang',['liat'=> $hasilbarang]);
       }
       public function Daftar_Pelanggan() {
        $hasilpelanggan = Post::all()->skip(21)->take(10);
        return view('Daftar_Pelanggan',['liat'=> $hasilpelanggan]);
       }
       public function Daftar_Pegawai() {
        $hasilpegawai = dpegawai::all();
        return view('Daftar_Pegawai',['liat'=> $hasilpegawai]);
       }
       public function Daftar_Supplier() {
        $hasilsupllier = Post::all()->skip(41)->take(10);
        return view('Daftar_Supplier',['liat'=> $hasilsupllier]);
       }
}
