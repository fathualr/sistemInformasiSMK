<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function show()
    {
        $data = [
            ['id' => 1, 'product' => 'Buku'],
            ['id' => 2, 'product' => 'Pensil'],
            ['id' => 3, 'product' => 'Penghapus 50M'],
        ];

        return view('list_product', compact('data'));
    }
}