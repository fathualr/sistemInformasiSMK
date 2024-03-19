<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function show()
    {
        $data = [
            ['id' => 1, 'produk' => 'Baju'],
            ['id' => 2, 'produk' => 'Hijab'],
            ['id' => 3, 'produk' => 'Skirt'],
        ];

        return view('list_product', compact('data'));
    }
}