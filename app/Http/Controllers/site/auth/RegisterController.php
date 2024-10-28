<?php

namespace App\Http\Controllers\site\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('site.pages.register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        if ($request->input('type') == 'doctor')
            $data['is_admin'] = true;
        if ($request->input('type') == 'patient')
            $data['is_patient'] = true;
        $data['password'] = Hash::make($request->input('password'));
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('site.home')->with('success',"User has been created successfully");
    }

    // public function register(Request $request):RedirectResponse{
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('/admin/dashboard');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ])->onlyInput('email');
    // }
}
