<?php

namespace App\Http\Controllers\MarketingManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketingManagerController extends Controller
{
    // Login
    public function login_view()
    {
        return view('marketingManager.login');
    }
}
