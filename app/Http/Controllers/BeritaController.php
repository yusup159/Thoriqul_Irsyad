<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    
    public function tambahberitaadmin(){
        return view('berita.tambahberitaadmin');
    }
    public function prosestambahberitaadmin(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
           
            'fotoberita' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $deskripsi = $request->deskripsi;
        $fotoPath = $request->file('fotoberita')->store('public/fotoberita'); 
        $dom = new DOMDocument();
        $dom ->loadHTML($deskripsi,9);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $key => $img){
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/storage/contentberita/" . time() . $key . '.png';
            file_put_contents(public_path('storage/contentberita') . '/' . time() . $key . '.png', $data);            

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);

        }
        $deskripsi = $dom->saveHTML();
        Berita::create([
            'user_id' => Auth::user()->id,
            'judul' => $request->input('judul'),
            'deskripsi' => $deskripsi,
            'fotoberita' => $fotoPath,
        ]);

        return redirect()->route('databerita/admin')->with('success', 'berita berhasil ditambahkan!');

    }
    public function showberitaadmin($id){
        $berita = Berita::find($id);
        return view('admin.previewberitaadmin',compact('berita'));
        
    }
    public function editberitaadmin($id){
        $berita = Berita::find($id);
        return view('admin.editberitaadmin',compact('berita'));
    }
    public function proseseditberitaadmin(Request $request ,$id){
        $berita = Berita::find($id);
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($request->hasFile('fotoberita')) {
            $rules['fotoberita'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
        }
        $deskripsi = $request->deskripsi;
    
    if ($request->hasFile('fotoberita')) {
        $fotoPath = $request->file('fotoberita')->store('public/fotoberita');
    } else {
        $fotoPath = $berita->fotoberita;
    }
        $dom = new DOMDocument();
        $dom->loadHTML($deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOERROR);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $key => $img){
                if(strpos($img->getAttribute('src'),'data:image/')===0){
                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name = "/storage/contentberita/" . time() . $key . '.png';
                file_put_contents(public_path('storage/contentberita') . '/' . time() . $key . '.png', $data);            

                $img->removeAttribute('src');
                $img->setAttribute('src',$image_name);
            }
        }
        $deskripsi = $dom->saveHTML();
        $berita->update([
            'judul' => $request->input('judul'),
            'deskripsi' => $deskripsi,
            'fotoberita' => $fotoPath,
        ]);        
        return redirect()->route('databerita/admin')->with('success', 'berita berhasil ubah!');
    }
    public function deleteberitaadmin($id){
        $berita = Berita::find($id);
    
        Storage::delete($berita->fotoberita);
    
        $dom = new DOMDocument();
        $dom->loadHTML($berita->deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOERROR);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $img){
            $src = $img->getAttribute('src');
            if(strpos($src, '/storage/contentberita/') !== false){
                $imagePath = public_path($src);
                if(file_exists($imagePath)){
                    unlink($imagePath); 
                }
            }
        }
    
        $berita->delete();
    
        return redirect()->route('databerita/admin')->with('success', 'berita berhasil dihapus!');
    }
    
    
}
