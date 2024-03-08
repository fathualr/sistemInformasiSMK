<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // $data = [
        //     'nama' => 'Muhammad Fathu Al Razi',
        //     'pekerjaan' => 'Developer'
        // ];

        // return view('home')->with($data);

        $nama = 'Shafiq';
        $pekerjaan = 'Mahasiswa';
        return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact(){
        return view('contact');
    }
    public function profile(){
        return view('profile');
    }
}