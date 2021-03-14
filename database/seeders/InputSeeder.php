<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InputSeeder extends Seeder
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
            'harga' => 300,
            'content' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
            'draft' => 0
            ]);
            DB::table('post')->insert([
                'title' => 'Fusce dictum finibus',
                'slug' => ' Fusce dictum finibus',
                'image' => 'img/gallery/02.jpg',
                'harga' => 190,
                'content' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                'draft' => 0
                ]);
                DB::table('post')->insert([
                    'title' => 'Fusce dictum finibus',
                    'slug' => ' Fusce dictum finibus',
                    'image' => 'img/gallery/03.jpg',
                    'harga' => 600,
                    'content' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                    'draft' => 0
                    ]);
                    ///
                    DB::table('post')->insert([
                        'title' => 'Quisque et felis eros',
                        'slug' => ' Quisque et felis eros',
                        'image' => 'img/gallery/07.jpg',
                        'harga' => 50,
                        'content' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                        'draft' => 0
                        ]);
                        DB::table('post')->insert([
                            'title' => 'Quisque ',
                            'slug' => ' Quisque ',
                            'image' => 'img/gallery/05.jpg',
                            'harga' => 70,
                            'content' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
                            'draft' => 0
                            ]);
                            DB::table('post')->insert([
                                'title' => 'felis eros',
                                'slug' => ' felis eros',
                                'image' => 'img/gallery/04.jpg',
                                'harga' => 123,
                                'content' => 'sit amet consectetur metus. Ut sit amet tellus accumsan',
                                'draft' => 0
                                ]);
                
    }
}
