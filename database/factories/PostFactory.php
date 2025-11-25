<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->sentence(6); // Buat kalimat acak 6 kata
        return [
            'title' => $title,
            'slug' => Str::slug($title), // Buat slug dari judul
            'content' => fake()->paragraphs(3, true), // 3 Paragraf isi berita
            'image' => null, // Gambar kosong dulu (nanti bisa edit di admin)
            'is_active' => true,
        ];
    }
}