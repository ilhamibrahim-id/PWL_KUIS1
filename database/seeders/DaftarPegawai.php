<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarPegawai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_pegawai')->insert([
            'title' => 'Ilham Ibrahim',
            'slug' => 'CEO FOUNDER',
            'image' => 'img/dpe/user.jpg',
            'content' => 'Pendiri dari simple-house.'
            ]);
        DB::table('daftar_pegawai')->insert([
                'title' => 'Candra Alif Firmansyah',
                'slug' => 'Marketing',
                'image' => 'img/dpe/user.jpg',
                'content' => 'Bagian Pemasaran untuk simple-house.'
            ]);
        DB::table('daftar_pegawai')->insert([
                'title' => 'Lugas Wicaksono',
                'slug' => 'Designer',
                'image' => 'img/dpe/user.jpg',
                'content' => 'Bagian Desain Produk untuk simple-house.'
            ]);
        DB::table('daftar_pegawai')->insert([
                'title' => 'Muhammad Hatari',
                'slug' => 'Konsultan TI',
                'image' => 'img/dpe/user.jpg',
                'content' => 'Bagian Analisa untuk simple-house.'
            ]);
        DB::table('daftar_pegawai')->insert([
                'title' => 'Supriyadi Sutomo',
                'slug' => 'Ketua Devisi Programmer',
                'image' => 'img/dpe/user.jpg',
                'content' => 'Bagian Mengatur Devisi Programmer untuk simple-house.'
            ]);
        DB::table('daftar_pegawai')->insert([
                'title' => 'Bryan Rizky',
                'slug' => 'Programmer',
                'image' => 'img/dpe/user.jpg',
                'content' => 'Bagian Backend untuk simple-house software.'
            ]);
        DB::table('daftar_pegawai')->insert([
                'title' => 'Awang Syukriansah',
                'slug' => 'Programmer',
                'image' => 'img/dpe/user.jpg',
                'content' => 'Bagian Backend untuk simple-house software.'
            ]);
        DB::table('daftar_pegawai')->insert([
                'title' => 'Alam Bakti',
                'slug' => 'Database Manajemen',
                'image' => 'img/dpe/user.jpg',
                'content' => 'Bagian Pengumpulan Data untuk simple-house software.'
            ]);
        DB::table('daftar_pegawai')->insert([
                'title' => 'Reiner Barun',
                'slug' => 'Psikologi',
                'image' => 'img/dpe/user.jpg',
                'content' => 'Bagian Pengumpulan Data Mood Si user untuk simple-house.'
            ]);
        DB::table('daftar_pegawai')->insert([
                'title' => 'Anjasmara',
                'slug' => 'Sales',
                'image' => 'img/dpe/user.jpg',
                'content' => 'Bagian Bagi Bagi Browsur untuk simple-house.'
            ]);
    }
}
