<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class, 'index']);
Route::get('/tentang',[Controller::class, 'tentang']);
Route::get('/kontak',[Controller::class, 'kontak']);
Route::get('/Daftar_Barang',[Controller::class, 'Daftar_Barang']);
Route::get('/Daftar_Pelanggan',[Controller::class, 'Daftar_Pelanggan']);
Route::get('/Daftar_Pegawai',[Controller::class, 'Daftar_Pegawai']);
Route::get('/Daftar_Supplier',[Controller::class, 'Daftar_Supplier']);