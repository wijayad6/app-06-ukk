<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at', 'DESC')->get();
        return view('dashboard_admin', compact('user'));
    }
}
