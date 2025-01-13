<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    // Exibe o formulário de login
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Processa o login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'As credenciais não correspondem.',
        ]);
    }

    // Exibe o formulário de registro
    public function showRegisterForm()
    {
        return view('admin.register');
    }

    // Processa o registro
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'cpf' => 'required|string|max:14|unique:admins',
            'password' => 'required|string|min:4|confirmed',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Conta criada com sucesso. Faça login.');
    }

    // Faz logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}