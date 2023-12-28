<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = "br";
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        if (Auth::attempt($credenciais, $request->remember)) {
            $request->session()->regenerate();
            session(['lang' => auth()->user()->lang]);
            Cookie::queue('lang', auth()->user()->lang, 3);
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('erro', 'EmailSenha');
        }
    }
    public function index()
    {
        $canal = 'login';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = "br";
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('login.login', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function recoverpw()
    {
        $canal = 'recoverpw';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = "br";
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('login.recoverpw', ['canal' => $canal, 'lang' => session('lang')]);
    }


    public function register()
    {
        $canal = 'register';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = "br";
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('login.register', ['canal' => $canal, 'lang' => session('lang')]);
    }

    public function registerPost(Request $request)
    {
        $canal = 'register';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = "br";
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'lang' => 'required|in:br,en,sp',
            'auth-terms-condition-check' => 'required|accepted'
        ], [
            "name.required" => "Nome é Obrigatório",
            "email.required" => "E-mail é Obrigatório",
            "email.email" => "E-mail precisa ser válido",
            "email.unique" => "E-mail ja consta em nossa base",
            "password.required" => "Senha Obrigatória",
            "password.confirmed" => "Senha não confere",
            "password.min" => "Senha deve ter mínimo de 6 caracteres",
            "password_confirmation.required" => "Senha Obrigatória",
            "password_confirmation.min" => "Senha deve ter mínimo de 6 caracteres",
            "lang.required" => "Selecione o idioma",
            "auth-terms-condition-check.required" => "É preciso aceitar os termos para prosseguir"
        ]);

        $user = $request->all();
        $user['password'] = bcrypt($request->password);
        $user['password_confirmation'] = bcrypt($request->password);

        Cookie::queue('lang', $request->lang, 3);
        session(['lang' => $request->lang]);
        $user = User::create($user);
        Auth::login($user);


        return view('home.home', ['canal' => $canal, 'lang' => $request->lang]);
    }
}
