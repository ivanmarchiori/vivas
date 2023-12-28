<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    function forgotPassword()
    {
        return view('login.recoverpw');
    }
    function forgotPasswordPost(Request $request)
    {
        $mensagens = [
            'email.required' => 'O campo de e-mail é obrigatório.',
            'email.email' => 'Por favor, forneça um endereço de e-mail válido.',
            'email.exists' => 'O endereço de e-mail não está registrado em nosso sistema.',
        ];

        $request->validate([
            'email' => 'required|email|exists:users',
        ],
        $mensagens);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert(
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]
        );

        Mail::send('emails.forgot-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
            $message->priority(3);
        });

        return redirect()->to(route('login.password'))->with('success', 'Acesse seu e-mail para resgatar sua senha');
    }
    function resetPassword($token)
    {
        return view('login.newpassword', compact('token'));
    }
    function resetPasswordPost(Request $request)
    {
        $request->validate([
            "email" => "required|email|exists:users",
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" => "required"
        ], [
            "email.required" => "E-mail é Obrigatório",
            "email.email" => "E-mail precisa ser válido",
            "password.required" => "Senha Obrigatória",
            "password.confirmed" => "Senha não confere",
            "password.min" => "Senha deve ter mínimo de 6 caracteres",
            "password_confirmation.required" => "Senha Obrigatória",
            "password_confirmation.min" => "Senha deve ter mínimo de 6 caracteres"
        ]);

        $updatePassword = DB::table('password_reset_tokens')->where([
            "email" => $request->email,
            "token" => $request->token
        ])->first();

        if (!$updatePassword) {
            return redirect()->to(route('login.reset-password'))->with('error', "Dados invalidos");
        }

        User::where("email", $request->email)->update(["password" => Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(["email" => $request->email])->delete();

        return redirect()->to(route('login.login'))->with('success', "Dados alterados");
    }
}
