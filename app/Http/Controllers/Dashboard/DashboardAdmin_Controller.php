<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminLogin_Request;

class DashboardAdmin_Controller extends Controller
{
    public function adminLogin() {
        return view('admin.auth.login');
    }

    public function adminverify(AdminLogin_Request $request) {

            if (Auth::guard('admin')->attempt(['email' => $request->email ,'password' => $request->password])) {
                return redirect()->intended('/admin');
            }
            return redirect(route('admin.login.form'))->with('error' , 'Invalid Data');

    }

    public function admin() {
        return view('admin.dashboard');
    }
}
