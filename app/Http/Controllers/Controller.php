<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        return view('templatelanding.dashboardlanding');
        
    }
    public function kegiatan(){
        $kegiatan = Kegiatan::orderBy('created_at', 'desc')->paginate(6);
        return view('templatelanding.kegiatan', compact('kegiatan'));
        
    }
    public function berita(){
        $berita = Berita::orderBy('created_at', 'desc')->get();
        return view('templatelanding.news',compact('berita'));
        
    }
    public function profil(){
        return view('templatelanding.profil');
        
    }
    public function detailberita(){
        return view('templatelanding.detailberita');
        
    }
    public function detailkegiatan(){
        return view('templatelanding.detailkegiatan');
        
    }
}
