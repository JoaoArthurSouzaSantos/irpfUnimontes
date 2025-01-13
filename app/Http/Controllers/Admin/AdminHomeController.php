<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function dashboard()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.Admdashboard');
        }
        return redirect('/admin/login');
    }
}

