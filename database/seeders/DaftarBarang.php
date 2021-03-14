<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DaftarBarang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_daftar_barang')->insert([
            'title' => 'Sate',
            'image' => 'img/db/sate.jpg',
            'harga' => 15000,
            'content' => 'Sate atau satai adalah makanan yang terbuat dari daging yang dipotong kecil-kecil dan ditusuk sedemikian rupa dengan tusukan lidi tulang daun kelapa atau bambu, kemudian dipanggang menggunakan bara arang kayu.'
            ]);
         DB::table('_daftar_barang')->insert([
                'title' => 'Bakso',
                'image' => 'img/db/bakso.jpg',
                'harga' => 10000,
                'content' => 'Bakso atau baso adalah jenis bola daging yang lazim ditemukan pada masakan Indonesia. Bakso umumnya dibuat dari campuran daging sapi giling dan tepung tapioka, tetapi ada juga bakso yang terbuat dari daging ayam, ikan, atau udang bahkan daging kerbau.'
             ]);
        DB::table('_daftar_barang')->insert([
                'title' => 'Burger',
                'image' => 'img/db/burger.jpg',
                'harga' => 9000,
                'content' => 'Hamburger adalah sejenis makanan berupa roti berbentuk bundar yang diiris dua dan di tengahnya diisi dengan patty yang biasanya diambil dari daging.'
             ]);
        DB::table('_daftar_barang')->insert([
                'title' => 'Gado - Gado',
                'image' => 'img/db/gado.jpg',
                'harga' => 10000,
                'content' => 'Gado-gado adalah salah satu makanan khas yang berasal dari Indonesia yang berupa sayur-sayuran yang direbus dan dicampur jadi satu.'
             ]);
        DB::table('_daftar_barang')->insert([
                'title' => 'Martabak',
                'image' => 'img/db/martabak.jpg',
                'harga' => 20000,
                'content' => 'Arti Harfiah Hok Lo Pan ( Martabak ) adalah Kue Orang Hok Lo. Cara membuatnya tidak terlalu sulit, menggunakan tepung terigu, diolesi dengan mentega, ditaburi coklat butir campur kacang tanah dan wijen, atau keju parut campur wijen, kemudian diberikan susu kental manis.'
             ]);
        DB::table('_daftar_barang')->insert([
                'title' => 'Nasi Goreng',
                'image' => 'img/db/nasgor.jpg',
                'harga' => 10000,
                'content' => 'Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin, atau mentega.'
             ]);
        DB::table('_daftar_barang')->insert([
                'title' => 'Rawon',
                'image' => 'img/db/rawon.jpg',
                'harga' => 10000,
                'content' => 'Rawon adalah masakan Indonesia berupa sup daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek.'
             ]);
        DB::table('_daftar_barang')->insert([
                'title' => 'Tempe',
                'image' => 'img/db/tempe.jpg',
                'harga' => 1000,
                'content' => 'Tempe adalah makanan khas Indonesia yang terbuat dari fermentasi terhadap biji kedelai atau beberapa bahan lain yang menggunakan beberapa jenis kapang Rhizopus, seperti Rhizopus oligosporus, Rh. oryzae, Rh. stolonifer, atau Rh. arrhizus. Sediaan fermentasi ini secara umum dikenal sebagai ragi tempe.'
             ]);
        DB::table('_daftar_barang')->insert([
                'title' => 'Nasi Kuning Tumpeng',
                'image' => 'img/db/tumpeng.jpg',
                'harga' => 120000,
                'content' => 'Nasi kuning adalah makanan khas Indonesia. Makanan ini terbuat dari beras yang dimasak bersama dengan kunyit serta santan dan rempah-rempah. Dengan ditambahkannya bumbu-bumbu dan santan, nasi kuning memiliki rasa yang lebih gurih daripada nasi putih.'
             ]);
        DB::table('_daftar_barang')->insert([
                'title' => 'Nasi Rendang',
                'image' => 'img/db/rendang.jpg',
                'harga' => 15000,
                'content' => 'Rendang atau randang (Jawi: رندڠ) adalah masakan daging asli Indonesia yang berasal dari Minangkabau. Masakan ini dihasilkan dari proses memasak suhu rendah dalam waktu lama menggunakan aneka rempah-rempah dan santan.'
             ]);
    }
}
