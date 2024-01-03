<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function profiladmin(){
        return view('admin.profiladmin');

    }
    public function proseseditprofiladmin(Request $request,$id){
        $user = User::find($id);
        $password =Auth::user()->password;
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password_lama' => 'required|min:6',
                'password_baru' => 'required|min:6|confirmed',
                'password_baru_confirmation' => 'required',
                'fotopengururs' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ],[
                'name.required'=> 'Nama wajib di isi',
                'email.required'=> 'Email wajib di isi',
                'email.email'=> 'Format email tidak valid',
                'email.unique'=> 'Email sudah terdaftar',
                'password.required'=> 'Password wajib di isi',
                'password.min'=> 'Password minimal 6 karakter',
                'password_baru.confirmed' => 'Konfirmasi password tidak cocok',
                'fotopengururs.required'=> 'Foto wajib di isi',
                'fotopengururs.image'=> 'File harus berupa gambar',
                'fotopengururs.mimes'=> 'Format gambar harus jpeg, png, jpg, gif',
                'fotopengururs.max'=> 'Ukuran gambar maksimal 2MB',
            ]);
            
        
           
            if (Hash::check($request->password_lama, $password)) {
                $fotoPath = $request->file('fotopengururs')->store('public/fotopengurus');
        
                $user->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'fotopengurus' => $fotoPath,
                    'role_id' => 1,
                ]);
        
           
            return redirect()->route('profil/admin')->with('success', 'Registrasi berhasil!');
        }
        else{
            return redirect()->route('profil/admin')->withErrors('Password lama tidak cocok');
        }
        }
    }
    public function datauser(){
        $user = User::all();
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
        $berita = Berita::all();
        return view('admin.berita', compact('berita'));
    }
    public function datakegiatanadmin(){
        $kegiatan = Kegiatan::all();
        return view('admin.kegiatan', compact('kegiatan'));
    }
}
