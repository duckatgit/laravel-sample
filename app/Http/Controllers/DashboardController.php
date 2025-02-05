<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $total_users = User::count();
            return view('dashboard', compact('total_users'));
        } else {
            return redirect()->route('login');
        }
    }

    public function stats()
    {
        return response()->json([
            'total_users' => User::count(),
            'your_login_count' => auth()->user()->login_count ?? 0
        ]);
    }
}
