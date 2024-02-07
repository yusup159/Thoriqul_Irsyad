<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $kegiatan = Kegiatan::latest()->take(3)->get();

        return view('templatelanding.dashboardlanding', compact('kegiatan'));
    }

    public function kegiatan()
    {
        $kegiatan = Kegiatan::orderBy('created_at', 'desc')->paginate(6);

        return view('templatelanding.kegiatan', compact('kegiatan'));
    }
    public function berita()
    {
        $berita = Berita::orderBy('created_at', 'desc')->paginate(6);
        return view('templatelanding.news', compact('berita'));
    }
    public function profil()
    {
        return view('templatelanding.profil');
    }
    public function detailberita($id)
    {
        $berita = Berita::find($id);
        return view('templatelanding.detailberita', compact('berita'));
    }
    public function detailkegiatan($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('templatelanding.detailkegiatan', compact('kegiatan'));
    }
}
