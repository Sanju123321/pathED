<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    
    public function LoginPage(Request $request)
    {
        if (Auth::check()) {
            return redirect('/admin');
        }
        return view('admin.login.index');
    }

    public function do_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Invalid email or password']);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/admin')->with('success', 'Login successful!');
        }

        return back()->withErrors(['email' => 'Login failed, please try again.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login')->with('success', 'Logged out successfully.');
    }
}
