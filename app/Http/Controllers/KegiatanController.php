<?php

namespace App\Http\Controllers;
require_once base_path('vendor/autoload.php');
use App\Models\Kegiatan;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

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
        $deskripsi = $request->deskripsi;
        $fotoPath = $request->file('fotokegiatan')->store('public/fotokegiatan'); 
        $dom = new DOMDocument();
        $dom ->loadHTML($deskripsi,9);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $key => $img){
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/storage/contentkegiatan/" . time() . $key . '.png';
            file_put_contents(public_path('storage/contentkegiatan') . '/' . time() . $key . '.png', $data);            

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);

        }
        $deskripsi = $dom->saveHTML();
        Kegiatan::create([
            'user_id' => Auth::user()->id,
            'judul' => $request->input('judul'),
            'deskripsi' => $deskripsi,
            'fotokegiatan' => $fotoPath,
        ]);

        return redirect()->route('datakegiatan/admin')->with('success', 'Kegiatan berhasil ditambahkan!');

    }
}
