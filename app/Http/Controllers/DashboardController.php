<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public  function index()
    {
        $nama = "M Zaini Ridha Ridha";
        $pekerjaan = "Student";
        return view('dashboard', compact('nama', 'pekerjaan'));
    }
}
