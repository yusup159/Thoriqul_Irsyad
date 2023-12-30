<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    public function tambahkegiatanadmin(){
        return view('kegiatan.tambahkegiatan');
    }
    public function prosestambahkegiatanadmin(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
           
            'fotokegiatan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoPath = $request->file('fotokegiatan')->store('public/fotokegiatan'); 

        Kegiatan::create([
            'user_id' => Auth::user()->id,
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'fotokegiatan' => $fotoPath,
        ]);

        return redirect()->route('datakegiatan/admin')->with('success', 'Kegiatan berhasil ditambahkan!');

    }
}
