<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{
    //

    public function product(){
        
        return view('admin.product.index');
    }
    public function index()
    {
        return view('admin.dashboard');
    }

    public function adminfunction()
    {
        
        
    }
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if admin exists
        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session()->put('is_admin_logged_in', true);
            session()->put('admin', $admin); // ✅ Store full Admin model

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function register(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // expects password_confirmation field
        ]);

        // Create admin user
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        // Optionally log them in
        auth()->login($admin);

        // Redirect to admin dashboard
        return redirect()->route('admin.dashboard')->with('success', 'Admin registered successfully.');
    }
}
