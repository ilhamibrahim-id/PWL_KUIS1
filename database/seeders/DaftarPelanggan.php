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
        DB::table('post')->insert([
            'title' => 'Ereh Yaeger',
            'slug' => 'Pelanggan 1',
            'image' => 'img/pelanggan/pelanggan.png',
            'harga' => 0,
            'content' => 'Pengunjung nomer 1',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Grisya Yaeger',
            'slug' => 'Pelanggan 2',
            'image' => 'img/pelanggan/pelanggan.png',
            'harga' => 0,
            'content' => 'Pengunjung nomer 2',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Zeke Yaeger',
            'slug' => 'Pelanggan 3',
            'image' => 'img/pelanggan/pelanggan.png',
            'harga' => 0,
            'content' => 'Pengunjung nomer 3',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Mikasa Ackerman',
            'slug' => 'Pelanggan 4',
            'image' => 'img/pelanggan/pelanggan.png',
            'harga' => 0,
            'content' => 'Pengunjung nomer 4',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Levi Ackerman',
            'slug' => 'Pelanggan 5',
            'image' => 'img/pelanggan/pelanggan.png',
            'harga' => 0,
            'content' => 'Pengunjung nomer 5',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Izumi Miyamura',
            'slug' => 'Pelanggan 6',
            'image' => 'img/pelanggan/pelanggan.png',
            'harga' => 0,
            'content' => 'Pengunjung nomer 6',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Honoka Hori',
            'slug' => 'Pelanggan 7',
            'image' => 'img/pelanggan/pelanggan.png',
            'harga' => 0,
            'content' => 'Pengunjung nomer 7',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Mitsuhara Cizuru',
            'slug' => 'Pelanggan 8',
            'image' => 'img/pelanggan/pelanggan.png',
            'harga' => 0,
            'content' => 'Pengunjung nomer 8',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Windah Basudara',
            'slug' => 'Pelanggan 9',
            'image' => 'img/pelanggan/pelanggan.png',
            'harga' => 0,
            'content' => 'Pengunjung nomer 9',
            'draft' => 0
            ]);
        DB::table('post')->insert([
            'title' => 'Sakura Hinomi',
            'slug' => 'Pelanggan 10',
            'image' => 'img/pelanggan/pelanggan.png',
            'harga' => 0,
            'content' => 'Pengunjung nomer 10',
            'draft' => 0
            ]);
    }
}
