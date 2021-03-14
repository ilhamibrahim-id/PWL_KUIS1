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
        DB::table('post')->insert([
            'title' => 'Ilham Ibrahim',
            'slug' => 'CEO FOUNDER',
            'image' => 'img/dpe/user.jpg',
            'harga' => 0,
            'content' => 'Pendiri dari simple-house.',
            'draft' => 0
            ]);
        DB::table('post')->insert([
                'title' => 'Candra Alif Firmansyah',
                'slug' => 'Marketing',
                'image' => 'img/dpe/user.jpg',
                'harga' => 0,
                'content' => 'Bagian Pemasaran untuk simple-house.',
                'draft' => 0
            ]);
        DB::table('post')->insert([
                'title' => 'Lugas Wicaksono',
                'slug' => 'Designer',
                'image' => 'img/dpe/user.jpg',
                'harga' => 0,
                'content' => 'Bagian Desain Produk untuk simple-house.',
                'draft' => 0
            ]);
        DB::table('post')->insert([
                'title' => 'Muhammad Hatari',
                'slug' => 'Konsultan TI',
                'image' => 'img/dpe/user.jpg',
                'harga' => 0,
                'content' => 'Bagian Analisa untuk simple-house.',
                'draft' => 0
            ]);
        DB::table('post')->insert([
                'title' => 'Supriyadi Sutomo',
                'slug' => 'Ketua Devisi Programmer',
                'image' => 'img/dpe/user.jpg',
                'harga' => 0,
                'content' => 'Bagian Mengatur Devisi Programmer untuk simple-house.',
                'draft' => 0
            ]);
        DB::table('post')->insert([
                'title' => 'Bryan Rizky',
                'slug' => 'Programmer',
                'image' => 'img/dpe/user.jpg',
                'harga' => 0,
                'content' => 'Bagian Backend untuk simple-house software.',
                'draft' => 0
            ]);
        DB::table('post')->insert([
                'title' => 'Awang Syukriansah',
                'slug' => 'Programmer',
                'image' => 'img/dpe/user.jpg',
                'harga' => 0,
                'content' => 'Bagian Backend untuk simple-house software.',
                'draft' => 0
            ]);
        DB::table('post')->insert([
                'title' => 'Alam Bakti',
                'slug' => 'Database Manajemen',
                'image' => 'img/dpe/user.jpg',
                'harga' => 0,
                'content' => 'Bagian Pengumpulan Data untuk simple-house software.',
                'draft' => 0
            ]);
        DB::table('post')->insert([
                'title' => 'Reiner Barun',
                'slug' => 'Psikologi',
                'image' => 'img/dpe/user.jpg',
                'harga' => 0,
                'content' => 'Bagian Pengumpulan Data Mood Si user untuk simple-house.',
                'draft' => 0
            ]);
        DB::table('post')->insert([
                'title' => 'Anjasmara',
                'slug' => 'Sales',
                'image' => 'img/dpe/user.jpg',
                'harga' => 0,
                'content' => 'Bagian Bagi Bagi Browsur untuk simple-house.',
                'draft' => 0
            ]);
    }
}
