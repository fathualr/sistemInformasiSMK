<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function lisbarang106(){
        return view('listbarang106');
    }
    public function lisbarang097(){
        return view('listbarang');
    }
    public function lisbarang119(){
        return view('listbarang119');
    }
    public function lisbarang096(){
        return view('listbarang096');
    }
}
