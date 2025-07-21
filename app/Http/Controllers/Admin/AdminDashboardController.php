<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
class AdminDashboardController extends Controller{
    public function product(){
         $products = Product::all();
        return view('admin.product.index')->with('products', $products);
    }
    public function productcreate(){
          return view('admin.product.create');
    }
    public function productStore(Request $request) {
        // Validate request
          $request->validate( [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048', // Validate multiple image
            // 'condition' => 'required|in:default,new,hot',
            'price' => 'required|numeric',
        ]);

        // this is the production side backend not this 
        $image_one = $request->photo;
        if($image_one) {
            $manager = new ImageManager(new Driver());
            $image_one_name = hexdec(uniqid()) . '.' . strtolower($image_one->getClientOriginalExtension());
            $image = $manager->read($image_one);
            // $image->resize(150, 150);
            // $image->
            $final_image = 'uploads/images/'.$image_one_name;
            $image->save($final_image);
            $photoSave1 = $final_image;
            $rro = 1;
        }
        // $staff->image = $photoSave1;
        // Prepare data for the product
        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Product::where('slug', $slug)->count();
        if ($count > 0) {
            $slug .= '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        $data['is_featured'] = $request->input('is_featured', 0);
        $data['size'] = $request->input('size') ? implode(',', $request->input('size')) : '';
        $data['photo'] = $photoSave1; // Storing images in 'photo' column
        // Save product
        $status = Product::create($data);
        if ($status) {
            $request->session()->flash('success', 'Product Successfully added');
        } else {
            $request->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('admin.dashboard');
    
    }

    public function events(){
          return view('admin.events.index');
    }
    public function eventstore(){
        
    }
    public function index(){
        return view('admin.dashboard');
    }
    public function adminfunction(){
       
    }
    public function showLoginForm(){
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
