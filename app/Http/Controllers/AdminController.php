<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;


class AdminController extends Controller
{
    public function profiladmin(){
        return view('admin.profiladmin');

    }
    public function dashboardadmin(){
        return view('admin.dashboard');
    }
    public function databeritaadmin(){
        $berita = Berita::all();
        return view('admin.berita', compact('berita'));
    }
    public function datakegiatanadmin(){
        $kegiatan = Kegiatan::all();
        return view('admin.kegiatan', compact('kegiatan'));
    }
}
