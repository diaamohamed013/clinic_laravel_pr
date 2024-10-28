<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\ContactRequest;
use App\Models\Contact;
use App\Models\UserMessages;

class ContactController extends Controller
{
    public function show()
    {
        return view('site.pages.contact');
    }

    public function contactUs(ContactRequest $request)
    {
        $data = $request->validated();
        UserMessages::create($data);
        return redirect()->route('site.contact.show')->with('success', "Messsage has been created successfully");
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
