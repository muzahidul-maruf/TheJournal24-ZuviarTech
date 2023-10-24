<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            // Validating data
            $validated = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            //check email
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                return redirect()->back()->with('email_error', 'Wrong Email..');
            }
            //check password
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->back()->with('password_error', 'Wrong Password..');
            }
            if (Auth::attempt($request->only(['email', 'password']), $request->get('remember'))) {
                if ($user->user_type == 0) {
                    return redirect()->route('admin.dashboard')->with('message', 'Admin Login Succcessful.');
                } else {
                    return redirect()->route('login-page')->with('message', 'You are not admin');
                }
            }
        }
    }
}
