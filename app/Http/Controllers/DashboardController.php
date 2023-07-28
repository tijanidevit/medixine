<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function getDashboardPage() : View {
        return view('admin.dashboard');
    }
}
