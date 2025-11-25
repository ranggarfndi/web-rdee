<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Product;
use App\Models\Team;
use App\Models\User; // Jika ingin auto-create user admin juga
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat 5 Berita Dummy
        Post::factory(5)->create();

        // 2. Buat 10 Produk Dummy
        Product::factory(10)->create();

        // 3. Buat 5 Pengurus Dummy
        Team::factory(5)->create();

        // Opsional: Buat User Admin Default (biar gak capek bikin manual kalau reset db)
        // User::factory()->create([
        //     'name' => 'Admin RDEE',
        //     'email' => 'admin@rdee.com',
        //     'password' => bcrypt('password'),
        // ]);
    }
}
