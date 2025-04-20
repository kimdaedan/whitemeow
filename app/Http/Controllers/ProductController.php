<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index()
    {
        // Contoh data produk
        $data = [
            ['id' => 1, 'produk' => 'Produk A'],
            ['id' => 2, 'produk' => 'Produk B'],
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];

        // Mengembalikan view dengan data produk
        return view('list_product', ['data' => $data]);
    }
}