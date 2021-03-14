<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('post')->insert([
            'title' => 'Fusce dictum finibus',
            'slug' => ' Fusce dictum finibus',
            'image' => 'img/gallery/01.jpg',
            'harga' => 1000,
            'content' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
            'draft' => 0
            ]);
           
    }
}
