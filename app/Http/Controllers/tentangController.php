<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tentangController extends Controller
{
    public function tampil(){
        return view('tentang');
    }
}
