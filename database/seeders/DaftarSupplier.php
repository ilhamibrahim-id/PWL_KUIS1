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
        DB::table('post')->insert([
            'title' => 'PT Berdikari Indonesia',
            'slug' => 'Supllier Daging',
            'image' => 'img/supllier/supllier.png',
            'harga' => 0,
            'content' => 'Supllier daging jenis sapi yang di tunjuk oleh mentri perdagangan',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'PT Perusahaan Perdagangan Indonesia',
            'slug' => 'Supllier Daging',
            'image' => 'img/supllier/supllier.png',
            'harga' => 0,
            'content' => 'Supllier daging import yang cukup populer di Indonesia',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Perum Bulog',
            'slug' => 'Supllier Sembako',
            'image' => 'img/supllier/supllier.png',
            'harga' => 0,
            'content' => 'Supllier dari BUMN yang sudah sangat terpercaya di Indonesia',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Dapur Rempah',
            'slug' => 'Supllier Rempah Rempah',
            'image' => 'img/supllier/supllier.png',
            'harga' => 0,
            'content' => 'Supllier asal surabaya yang bisa menjamin ketersediaan rempah rempah',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Bernardi Indonesia',
            'slug' => 'Supllier Roti Burger',
            'image' => 'img/supllier/supllier.png',
            'harga' => 0,
            'content' => 'Perusahaan penyedia bahan bahan makanan modern di indonesia',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'PT Indo Cino Global',
            'slug' => 'Supllier Sayur Segar',
            'image' => 'img/supllier/supllier.png',
            'harga' => 0,
            'content' => 'Perusahaan yang bergerak dalam bidang penyediaan sayur mayur yang ada di Surabaya',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Pasar Terdekat',
            'slug' => 'Supllier Tempe',
            'image' => 'img/supllier/supllier.png',
            'harga' => 0,
            'content' => 'Tempat menyuplly tempe dengan harga yang terpercaya',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Agen Telur Terdekat',
            'slug' => 'Supllier Telur',
            'image' => 'img/supllier/supllier.png',
            'harga' => 0,
            'content' => 'Supllier telur yang sangat terpercaya',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Jacob Box Styrofoam Garuda',
            'slug' => 'Supllier Box Styrofoam',
            'image' => 'img/supllier/supllier.png',
            'harga' => 0,
            'content' => 'Supllier box untuk membungkus makanan yang telah kami sediakan',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Distributor Peralatan Rumah Tangga',
            'slug' => 'Supllier Alat Makan',
            'image' => 'img/supllier/supllier.png',
            'harga' => 0,
            'content' => 'Supllier alat makan untuk kebutuhan makan di tempat',
            'draft' => 0
            ]);
    }
}
