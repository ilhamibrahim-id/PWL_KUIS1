<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostSeeder::class);
        $this->call(InputSeeder::class);
        $this->call(About::class);
        $this->call(DaftarBarang::class);
        $this->call(DaftarPelanggan::class);
        $this->call(DaftarPegawai::class);
        $this->call(DaftarSupplier::class);
    }
}
