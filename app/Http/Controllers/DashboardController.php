<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function listbarang106(){
        return view('listbarangview106');
    }
    public function listbarang099(){
        return view('listbarangview099');
    }
    public function lisbarang119(){
        return view('listbarang119');
    }
    public function lisbarang096(){
        return view('listbarang096');
    }
}
