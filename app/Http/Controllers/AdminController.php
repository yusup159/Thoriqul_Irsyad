<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardadmin(){
        return view('admin.dashboard');
    }
    public function databeritaadmin(){
        return view('admin.berita');
    }
    public function datakegiatanadmin(){
        return view('admin.kegiatan');
    }
}
