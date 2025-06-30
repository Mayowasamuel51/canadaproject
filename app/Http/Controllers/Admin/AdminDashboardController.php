<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
     public function index()
    {
        return view('admin.dashboard');
    }

    public function adminfunction(){
        return view ('admin.function');
    }
     public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Option 1: Check against hardcoded credentials
        if (
            $request->email === 'admin@mysite.com' &&
            $request->password === '12345678'
        ) {
            session(['is_admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
