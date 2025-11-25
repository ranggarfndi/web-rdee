<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // 1. Halaman Beranda
    public function index()
    {
        $posts = \App\Models\Post::where('is_active', true)->latest()->take(5)->get();
        $products = \App\Models\Product::latest()->take(4)->get();
        
        // UBAH DISINI: Dari take(4) menjadi take(3)
        $teams = \App\Models\Team::take(3)->get(); 
        
        return view('welcome', compact('posts', 'products', 'teams'));
    }

    // 2. Halaman Daftar Berita (Arsip)
    public function berita()
    {
        // Ambil berita aktif, 9 per halaman (Pagination)
        $posts = Post::where('is_active', true)->latest()->paginate(9);
        return view('berita.index', compact('posts'));
    }

    // 3. Halaman Detail Berita
    public function detailBerita($slug)
    {
        // Cari berita berdasarkan slug, kalau gak ada tampilkan 404
        $post = Post::where('slug', $slug)->where('is_active', true)->firstOrFail();

        // Ambil berita lain untuk rekomendasi di bawah (selain berita ini)
        $terkait = Post::where('is_active', true)
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(3)
            ->get();

        return view('berita.show', compact('post', 'terkait'));
    }

    // 4. Halaman Daftar Produk
    public function produk()
    {
        $products = Product::latest()->paginate(12);
        return view('produk.index', compact('products'));
    }

    public function detailProduk($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        
        // (Opsional) Produk lain acak sebagai rekomendasi
        $related = Product::where('id', '!=', $product->id)->inRandomOrder()->take(4)->get();

        return view('produk.show', compact('product', 'related'));
    }

    public function tentang()
    {
        // Hanya ambil 3 pengurus untuk preview
        $teams = \App\Models\Team::take(3)->get(); 
        return view('pages.tentang', compact('teams'));
    }

    // Halaman Semua Pengurus
    public function pengurus()
    {
        $teams = \App\Models\Team::all(); // Ambil semua
        return view('pages.pengurus.index', compact('teams'));
    }

    // Detail Pengurus
    public function detailPengurus($id)
    {
        // Cari berdasarkan ID (karena kita tidak pakai slug di table team)
        $team = \App\Models\Team::findOrFail($id);
        return view('pages.pengurus.show', compact('team'));
    }

    public function demplot()
    {
        return view('pages.demplot');
    }
    public function kontak()
    {
        return view('pages.kontak');
    }
}
