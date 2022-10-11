<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'halo',
            'username' => 'user',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);
        $kategori = Kategori::create([
            'name' => 'makanan'
        ]); 
        $kategori = Kategori::create([
            'name' => 'minuman'
        ]);  
        $kategori = Kategori::create([
            'name' => 'aksesoris'
        ]);

        Produk::create([
           'name' => 'Spiderman eyo',
           'harga' => 1000,
           'foto' => '/images/halo.jpg',
           'kategori_id' => 1
        ]);
        
        Produk::create([
            'name' => 'Teh hijau eyo',
            'harga' => 1000,
            'foto' => '/images/halo.jpg',
            'kategori_id' => 2
         ]);
         
        Produk::create([
            'name' => 'Robin eyo',
            'harga' => 1000,
            'foto' => '/images/halo.jpg',
            'kategori_id' => 3
         ]);
         
        Produk::create([
            'name' => 'kue eyo',
            'harga' => 1000,
            'foto' => '/images/halo.jpg',
            'kategori_id' => 1 
         ]);
    }
}
