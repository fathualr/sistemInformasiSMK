<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layout extends Controller
{
    public function show()
    {
        $data = [
            ['id' => 1, 'produc' => 'Buku'],
            ['id' => 2, 'produc' => 'Pensil'],
            ['id' => 3, 'produc' => 'Penghapus 50M'],
        ];

        return view('list_produc', compact('data'));
    }
}
