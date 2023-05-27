<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    if (Auth::user()) {
      return redirect('home');
    } else {
      return view('auth.login');
    }
  }
  public function auth(Request $request)
  {
    $validated = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required']
    ]);

    $email = $request->email;
    $password = $request->password;
    $remember = $request->remember;

    if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
      $request->session()->regenerate();
      return redirect('home');
    }

    return back()->withErrors([
      'email' => 'Periksa kembali akun anda'
    ])->onlyInput('email');
  }
  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
  }
}
