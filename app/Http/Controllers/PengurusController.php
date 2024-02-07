<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function dashboardpengurus()
    {
        return view('pengurus.dashboard');
    }
    public function databeritapengurus()
    {
        return view('pengurus.berita');
    }
    public function datakegiatanpengurus()
    {
        return view('pengurus.kegiatan');
    }
}
