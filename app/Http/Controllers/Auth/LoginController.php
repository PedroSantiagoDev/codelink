<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->with([
            'message' => 'As credenciais fornecidas não correspondem aos nossos registros',
        ])->onlyInput('email');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('login')->with(['message' => 'Desconectado com sucesso!']);
    }
}
