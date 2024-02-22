<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $data = [
        //     'nama' => 'Shafiq',
        //     'pekerjaan' => 'Software Enginering',
            
        // ];
        // return view('home')->with($data);
        
        $nama = 'Shafiq';
        $pekerjaan = 'FrontEnd';
        return view('home', compact('nama', 'pekerjaan'));
    }
    public function contact(){
        return view('contact');
    }
}