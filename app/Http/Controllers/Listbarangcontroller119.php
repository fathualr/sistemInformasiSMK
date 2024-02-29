<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Listbarangcontroller119 extends Controller
{
    public function getdata()
    {
    //
    $dataBarang = [
        ['id' => 1 'nama' => 'Beras Pandan wangi', 'harga' => 15000],
        ['id' => 1 'nama' => 'Tepung Terigu', 'harga' => 20000],
        ['id' => 1 'nama' => 'Baygon Cair', 'harga' => 13500],
        ['id' => 1 'nama' => 'Penyedap Royco', 'harga' => 3200],
        ['id' => 1 'nama' => 'Minyak goreng', 'harga' => 14000],
    ]

    return $dataBarang;
}

public function tampilkan(){
    $data = $this->getData();
    return view('List_barang',compact('data'));
}
}