<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarPelanggan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            'nama' => 'Ereh Yaeger',
            'alamat' => 'Tembok Rose 1',
            'image' => 'img/pelanggan/pelanggan.png',
            'deskripsi' => 'Pengunjung nomer 1',
            'draft' => 0
            ]);
        DB::table('pelanggan')->insert([
            'nama' => 'Grisya Yaeger',
            'alamat' => 'Tembok Rose 2',
            'image' => 'img/pelanggan/pelanggan.png',
            'deskripsi' => 'Pengunjung nomer 2',
            'draft' => 0
            ]);
        DB::table('pelanggan')->insert([
            'nama' => 'Zeke Yaeger',
            'alamat' => 'Tembok Rose 3',
            'image' => 'img/pelanggan/pelanggan.png',
            'deskripsi' => 'Pengunjung nomer 3',
            'draft' => 0
            ]);
        DB::table('pelanggan')->insert([
            'nama' => 'Mikasa Ackerman',
            'alamat' => 'Tembok Rose 4',
            'image' => 'img/pelanggan/pelanggan.png',
            'deskripsi' => 'Pengunjung nomer 4',
            'draft' => 0
            ]);
        DB::table('pelanggan')->insert([
            'nama' => 'Levi Ackerman',
            'alamat' => 'Tembok Rose 5',
            'image' => 'img/pelanggan/pelanggan.png',
            'deskripsi' => 'Pengunjung nomer 5',
            'draft' => 0
            ]);
        DB::table('pelanggan')->insert([
            'nama' => 'Izumi Miyamura',
            'alamat' => 'Tembok Rose 6',
            'image' => 'img/pelanggan/pelanggan.png',
            'deskripsi' => 'Pengunjung nomer 6',
            'draft' => 0
            ]);
        DB::table('pelanggan')->insert([
            'nama' => 'Honoka Hori',
            'alamat' => 'Tembok Rose 7',
            'image' => 'img/pelanggan/pelanggan.png',
            'deskripsi' => 'Pengunjung nomer 7',
            'draft' => 0
            ]);
        DB::table('pelanggan')->insert([
            'nama' => 'Mitsuhara Cizuru',
            'alamat' => 'Tembok Rose 8',
            'image' => 'img/pelanggan/pelanggan.png',
            'deskripsi' => 'Pengunjung nomer 8',
            'draft' => 0
            ]);
        DB::table('pelanggan')->insert([
            'nama' => 'Windah Basudara',
            'alamat' => 'Tembok Rose 9',
            'image' => 'img/pelanggan/pelanggan.png',
            'deskripsi' => 'Pengunjung nomer 9',
            'draft' => 0
            ]);
        DB::table('pelanggan')->insert([
            'nama' => 'Sakura Hinomi',
            'alamat' => 'Tembok Rose 10',
            'image' => 'img/pelanggan/pelanggan.png',
            'deskripsi' => 'Pengunjung nomer 10',
            'draft' => 0
            ]);
    }
}
