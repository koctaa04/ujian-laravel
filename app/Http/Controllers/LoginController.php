<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nisn' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/siswa');
        }

        return back()->with('login_error',);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // public function register()
    // {
    //     return view('homepage.register', [
    //         'active' => ''
    //     ]);
    // }

    // public function Registration(Request $request)
    // {
    //     // return $request->all();
    //     $validatedData = $request->validate([
    //         'name' => 'required|min:5|max:15',
    //         'nisn' => 'required|numeric|min_digits:8|max_digits:12|unique:users',
    //         // 'username' => 'required|min:3|max:255|unique:users',
    //         'email' => 'required|email:dns|unique:users',
    //         'password' => 'required|min:8|max:255',
    //     ]);
    //     // dd('registrasi berhasil');

    //     // $validatedData['password'] = bcrypt($validatedData['password']);
    //     $validatedData['password'] = Hash::make($validatedData['password']);
    //     $validatedData['status'] = '1';
    //     User::create($validatedData);
    //     // $request->session()->flash('success', 'Registration successful!');
    //     return redirect('/login')->with('loginSuccess', 'Registration successful!');
    // }
}
