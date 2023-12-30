<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('pengurus.login');
    }
    public function proseslogin(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ],[
            'email.required'=> 'email wajib di isi',
            'password.required'=> 'password wajib di isi',
        ]);

        $infologin=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard/admin');
            } elseif (Auth::user()->role_id == 2) {
                return redirect('dashboard/pengurus');
            }
        } else {
            return redirect('')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
        
    }
    public function register(){
        return view('pengurus.register');
    }
    public function prosesregister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
            'fotopengururs' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ],[
            'name.required'=> 'Nama wajib di isi',
            'email.required'=> 'Email wajib di isi',
            'email.email'=> 'Format email tidak valid',
            'email.unique'=> 'Email sudah terdaftar',
            'password.required'=> 'Password wajib di isi',
            'password.min'=> 'Password minimal 6 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok',
            'fotopengururs.required'=> 'Foto wajib di isi',
            'fotopengururs.image'=> 'File harus berupa gambar',
            'fotopengururs.mimes'=> 'Format gambar harus jpeg, png, jpg, gif',
            'fotopengururs.max'=> 'Ukuran gambar maksimal 2MB',
        ]);
        
    
        $fotoPath = $request->file('fotopengururs')->store('public/fotopengurus'); 
    
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'fotopengurus' => $fotoPath,
            'role_id' => 1, 
        ]);
    
       
        return redirect()->route('login')->with('success', 'Registrasi berhasil!');

    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
