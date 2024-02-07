<?php

namespace App\Http\Controllers;

require_once base_path('vendor/autoload.php');

use App\Models\Kegiatan;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function tambahkegiatanadmin()
    {
        return view('kegiatan.tambahkegiatanadmin');
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
        $dom->loadHTML($deskripsi, 9);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/storage/contentkegiatan/" . time() . $key . '.png';
            file_put_contents(public_path('storage/contentkegiatan') . '/' . time() . $key . '.png', $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
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
    public function showkegiatanadmin($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.previewkegiatanadmin', compact('kegiatan'));
    }
    public function editkegiatanadmin($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.editkegiatanadmin', compact('kegiatan'));
    }
    public function proseseditkegiatanadmin(Request $request, $id)
    {
        $kegiatan = Kegiatan::find($id);
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($request->hasFile('fotokegiatan')) {
            $rules['fotokegiatan'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
        }
        $deskripsi = $request->deskripsi;

        if ($request->hasFile('fotokegiatan')) {
            $fotoPath = $request->file('fotokegiatan')->store('public/fotokegiatan');
        } else {
            $fotoPath = $kegiatan->fotokegiatan;
        }
        $dom = new DOMDocument();
        $dom->loadHTML($deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOERROR);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            if (strpos($img->getAttribute('src'), 'data:image/') === 0) {
                $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                $image_name = "/storage/contentkegiatan/" . time() . $key . '.png';
                file_put_contents(public_path('storage/contentkegiatan') . '/' . time() . $key . '.png', $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }
        $deskripsi = $dom->saveHTML();
        $kegiatan->update([
            'judul' => $request->input('judul'),
            'deskripsi' => $deskripsi,
            'fotokegiatan' => $fotoPath,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('datakegiatan/admin')->with('success', 'Kegiatan berhasil ubah!');
    }
    public function deletekegiatanadmin($id)
    {
        $kegiatan = Kegiatan::find($id);

        Storage::delete($kegiatan->fotokegiatan);

        $dom = new DOMDocument();
        $dom->loadHTML($kegiatan->deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOERROR);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (strpos($src, '/storage/contentkegiatan/') !== false) {
                $imagePath = public_path($src);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
        }

        $kegiatan->delete();

        return redirect()->route('datakegiatan/admin')->with('success', 'Kegiatan berhasil dihapus!');
    }
}
