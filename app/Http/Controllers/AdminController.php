<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;


class AdminController extends Controller
{
    public function profiladmin(){
        return view('admin.profiladmin');

    }
    public function proseseditprofiladmin(Request $request, $id)
    {
        $user = User::find($id);
        $password = Auth::user()->password;
    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password_lama' => 'required|min:6',
            'fotopengururs' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'Nama wajib di isi',
            'email.required' => 'Email wajib di isi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password_lama.required' => 'Password lama wajib di isi',
            'password_lama.min' => 'Password lama minimal 6 karakter',
            'fotopengururs.image' => 'File harus berupa gambar',
            'fotopengururs.mimes' => 'Format gambar harus jpeg, png, jpg, gif',
            'fotopengururs.max' => 'Ukuran gambar maksimal 2MB',
        ]);
    
        if (Hash::check($request->password_lama, $password)) {
            if ($request->hasFile('fotopengururs')) {
                $fotoPath = $request->file('fotopengururs')->store('public/fotopengurus');
                $user->fotopengurus = $fotoPath;
            }
    
            $userData = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'role_id' => 2,
            ];
    
            if ($request->filled('password_baru')) {
                $userData['password'] = bcrypt($request->input('password_baru'));
            }
    
            $user->update($userData);
    
            return redirect()->route('profil/admin')->with('success', 'Profil berhasil diubah!');
        } else {
            return redirect()->route('profil/admin')->withErrors('Password lama tidak cocok');
        }
    }
    public function datauser(){
        $user = User::orderBy('created_at', 'desc')->get();
     return view('admin.user', compact('user'));

    }
    public function deleteuser($id){
        $user = User::find($id);
    
        Storage::delete($user->fotopengurus);
    
    
        $user->delete();
    
        return redirect()->route('datauser/admin')->with('success', 'User berhasil dihapus!');
    }
    
    public function dashboardadmin(){
        return view('admin.dashboard');
    }
   
    public function databeritaadmin(){
       
        $berita = Berita::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.berita', compact('berita'));
        
    }
    public function datakegiatanadmin()
    {
        $kegiatan = Kegiatan::orderBy('created_at', 'desc')->paginate(5);

        
        return view('admin.kegiatan', compact('kegiatan'));
    }
    
}
