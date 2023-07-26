<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse ;

class LoginController extends Controller
{
    function getLoginPage() : View {
        return view('admin/login');
    }
    function loginAction(LoginRequest $request) : RedirectResponse {
        return to_route('admin/login');
    }
}
