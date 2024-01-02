<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;


class AdminController extends Controller
{
    public function dashboardadmin(){
        return view('admin.dashboard');
    }
    public function databeritaadmin(){
        return view('admin.berita');
    }
    public function datakegiatanadmin(){
        $kegiatan = Kegiatan::all();
        return view('admin.kegiatan', compact('kegiatan'));
    }
}
