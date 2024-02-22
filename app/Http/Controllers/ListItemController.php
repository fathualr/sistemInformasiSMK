<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    function tampil($id, $nama, $stok, $harga){
        return view('list_item', ['id' => $id, 'nama' => $nama, 'stok' => $stok, 'harga' => $harga]);
    }
    
}
