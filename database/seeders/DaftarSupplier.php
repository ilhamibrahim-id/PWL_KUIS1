<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarSupplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supllier')->insert([
            'nama' => 'PT Berdikari Indonesia',
            'alamat' => 'Jakarta',
            'image' => 'img/supllier/supllier.png',
            'deskripsi' => 'Supllier daging jenis sapi yang di tunjuk oleh mentri perdagangan',
            'draft' => 0
            ]);
        DB::table('supllier')->insert([
            'nama' => 'PT Perusahaan Perdagangan Indonesia',
            'alamat' => 'Jakarta',
            'image' => 'img/supllier/supllier.png',
            'deskripsi' => 'Supllier daging import yang cukup populer di Indonesia',
            'draft' => 0
            ]);
        DB::table('supllier')->insert([
            'nama' => 'Perum Bulog',
            'alamat' => 'Surabaya',
            'image' => 'img/supllier/supllier.png',
            'deskripsi' => 'Supllier dari BUMN yang sudah sangat terpercaya di Indonesia',
            'draft' => 0
            ]);
        DB::table('supllier')->insert([
            'nama' => 'Dapur Rempah',
            'alamat' => 'Surabaya',
            'image' => 'img/supllier/supllier.png',
            'deskripsi' => 'Supllier asal surabaya yang bisa menjamin ketersediaan rempah rempah',
            'draft' => 0
            ]);
        DB::table('supllier')->insert([
            'nama' => 'Bernardi Indonesia',
            'alamat' => 'Surabaya',
            'image' => 'img/supllier/supllier.png',
            'deskripsi' => 'Perusahaan penyedia bahan bahan makanan modern di indonesia',
            'draft' => 0
            ]);
        DB::table('supllier')->insert([
            'nama' => 'PT Indo Cino Global',
            'alamat' => 'Surabaya',
            'image' => 'img/supllier/supllier.png',
            'deskripsi' => 'Perusahaan yang bergerak dalam bidang penyediaan sayur mayur yang ada di Surabaya',
            'draft' => 0
            ]);
        DB::table('supllier')->insert([
            'nama' => 'Pasar Terdekat',
            'alamat' => 'Surabaya',
            'image' => 'img/supllier/supllier.png',
            'deskripsi' => 'Tempat menyuplly tempe dengan harga yang terpercaya',
            'draft' => 0
            ]);
        DB::table('supllier')->insert([
            'nama' => 'Agen Telur Terdekat',
            'alamat' => 'Surabaya',
            'image' => 'img/supllier/supllier.png',
            'deskripsi' => 'Supllier telur yang sangat terpercaya',
            'draft' => 0
            ]);
        DB::table('supllier')->insert([
            'nama' => 'Jacob Box Styrofoam Garuda',
            'alamat' => 'Surabaya',
            'image' => 'img/supllier/supllier.png',
            'deskripsi' => 'Supllier box untuk membungkus makanan yang telah kami sediakan',
            'draft' => 0
            ]);
        DB::table('supllier')->insert([
            'nama' => 'Distributor Peralatan Rumah Tangga',
            'alamat' => 'Surabaya',
            'image' => 'img/supllier/supllier.png',
            'deskripsi' => 'Supllier alat makan untuk kebutuhan makan di tempat',
            'draft' => 0
            ]);
    }
}
