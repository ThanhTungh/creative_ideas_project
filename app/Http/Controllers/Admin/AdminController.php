<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Login
    public function login_view()
    {
        return view('admin.auth.login');
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:5',
        ]);

        $admin = Admin::where('email', $request->email)->where('password', $request->password)->first();
        if ($admin)
        {
            return redirect()->route('index');
        }
        else 
        {
            return redirect()->route('admin_login');
        }
    }

    // Register
    public function register_submit()
    {
        $admin = Admin::where('email', 'admin@gmail.com')->first();
        if ($admin)
        {
            return redirect()->route('admin_login');
        }
        else 
        {
            $new_admin = new Admin();
            $new_admin->name = 'Admin';
            $new_admin->email = 'admin@gmail.com';
            $new_admin->password = '123456';
            $new_admin->save();
            return redirect()->route('admin_login');
        }
    }
}
