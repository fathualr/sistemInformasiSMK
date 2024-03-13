<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ekstrakulikuler5Controller extends Controller
{
    public function getEkstrakulikuler()
    {
        $ekstrakulikuler5 = [
            [
                'nama' => 'Klub Bola Basket',
                'deskripsi' => 'Bergabunglah dengan klub bola basket kami dan tingkatkan keterampilan bermain bola basket Anda!',
                'gambar' => '/images/basket.jpg' 
            ],
            [
                'nama' => 'Paduan Suara',
                'deskripsi' => 'Sampaikan bakat vokal Anda di paduan suara sekolah kami yang terkenal dengan prestasinya!',
                'gambar' => '/images/paduansuara.jpg' 
            ],
            [
                'nama' => 'Klub Programming',
                'deskripsi' => 'Pelajari dan tingkatkan kemampuan pemrograman Anda dengan bergabung di klub programming kami!',
                'gambar' => '/images/programming.jpg' 
            ],
        ];
        return $ekstrakulikuler5;
    }

    public function tampilkan()
    {
        $ekstrakulikuler_ = $this->getEkstrakulikuler();
        return view('ekstrakulikuler_5', compact('ekstrakulikuler_'));
    }
}
