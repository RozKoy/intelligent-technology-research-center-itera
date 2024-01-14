<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function loginView () 
    {
        return view('Admin.login', ['page' => 'Login']);
    }

    public function authenticate (Request $request)
    {
        try {
            $credentials = $request -> validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);
     
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
     
                return redirect()->intended('admin');
                // return response() -> json ([
                //     'success' => true,
                //     'data' => $request -> input(),
                // ]);
            }

            // return response() -> json ([
            //     'success' => false,
            //     'data' => $request -> input(),
            // ]);
            return back() -> with('failed', 'Login Gagal, Silahkan Cek Username dan Password');
        } catch (\Exception $e) {
            // return back()->withErrors([
            //     'email' => 'The provided credentials do not match our records.',
            // ])->onlyInput('email');
            // return response() -> json ([
            //     'success' => false,
            //     'data' => null,
            //     'message' => $e -> getMessage(),
            // ]);
            return back() -> with('failed', 'Login Gagal');
        }
    }

    public function registerView ()
    {
        return view('Admin.register', ['page' => 'Register']);
    }

    public function register (Request $request)
    {
        try {
            $newUser = $request -> validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);

            $newUser['password'] = Hash::make($request -> password);

            User::create($newUser);

            return redirect('login');
            // return response() -> json ([
            //     'success' => true,
            //     'data' => $request -> input(),
            // ]);
        } catch (\Exception $e) {
            // return response() -> json ([
            //     'success' => false,
            //     'data' => null,
            //     'message' => $e -> getMessage(),
            // ]);
            return back() -> with ('failed', 'Registrasi Gagal');
        }
    }

    public function logout (Request $request)
    {
        try {
            Auth::logout();
         
            $request -> session() -> invalidate();
         
            $request -> session() -> regenerateToken();
         
            return redirect('login');
            // return response() -> json ([
            //     'success' => true,
            //     'data' => null,
            // ]);
        } catch (\Exception $e) {
            // return response() -> json ([
            //     'success' => false,
            //     'data' => null,
            //     'message' => $e -> getMessage(),
            // ]);
            return back() -> with('failed', 'Logout Gagal');
        }
    }
}
