<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public  function index()
    {
        $nama = "M Zaini Ridha Ridha";
        $pekerjaan = "Student";
        $nim = "3312301106";
        return view('dashboard', compact('nama', 'pekerjaan', 'nim'));
    }
}
