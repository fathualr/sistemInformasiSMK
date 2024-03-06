<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ekstrakurikuler extends Controller
{
    public function getList()
    {
        // Di sini Anda dapat menambahkan logika untuk mendapatkan daftar ekstrakurikuler dari model atau dari sumber data lainnya
        $ekstrakurikuler = [
            ['nama' => 'Paskibra', 'deskripsi' => 'Paskibra adalah kegiatan ekstrakurikuler yang mempelajari disiplin militer dan tata upacara.', 'gambar' => 'paskibra.jpg'],
            ['nama' => 'Futsal', 'deskripsi' => 'Futsal adalah kegiatan olahraga sepak bola dalam ruangan yang dimainkan oleh dua tim.', 'gambar' => 'futsal.jpg'],
            ['nama' => 'Paduan Suara', 'deskripsi' => 'Paduan Suara adalah kegiatan ekstrakurikuler yang mempelajari menyanyi dalam grup.', 'gambar' => 'paduan_suara.jpg'],
            // Anda dapat menambahkan lebih banyak ekstrakurikuler di sini
        ];

        return view('ekstrakurikuler.list', compact('ekstrakurikuler'));
    }
}
