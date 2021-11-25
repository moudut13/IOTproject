<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('Dashboard.index');
    }
    public function profile(){
        return view('Dashboard.profile');
    }

    public function settings(){
        return view('Dashboard.settings');
    }
}
