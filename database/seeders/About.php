<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class About extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title' => 'Jennifer Soft',
            'slug' => ' Founder and CEO',
            'image' => 'img/about-01.jpg',
            'harga' => 123,
            'content' => 'Vivamus cursus leo nec sem feugiat sagittis. Duis ut feugiat odio, sit amet accumsan odio.',
            'draft' => 0
            ]);
            DB::table('post')->insert([
                'title' => 'Daisy Walker',
                'slug' => ' Executive Chef',
                'image' => 'img/about-02.jpg',
                'harga' => 123,
                'content' => 'Praesent non vulputate elit. Orci varius natoque et magnis dis parturient, nascetur ridiculus mus.',
                'draft' => 0
                ]);
                DB::table('post')->insert([
                    'title' => 'Florence Nelson',
                    'slug' => ' Kitchen Manager',
                    'image' => 'img/about-03.jpg',
                    'harga' => 123,
                    'content' => 'Aenean sapien sem, ultricies sed vulputate et, auctor vel mauris. Integer sit amet diam eget est facilisis lacinia vitae.',
                    'draft' => 0
                    ]);
                    DB::table('post')->insert([
                        'title' => 'Valentina Martin',
                        'slug' => ' Culinary Director',
                        'image' => 'img/about-04.jpg',
                        'harga' => 123,
                        'content' => 'raesent non vulputate elit. Orci varius natoque penatibus et magnis montes, nascetur ridiculus mus.',
                        'draft' => 0
                        ]);

    }
}
