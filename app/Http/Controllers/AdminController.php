<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $title = "Admin Dashboard";
        $totalUsers = 50;

        //  compact
        // return view('admin.dashboard', compact('title', 'totalUsers'));

        //  with
        // return view('admin.dashboard')
        //     ->with('title', $title)
        //     ->with('totalUsers', $totalUsers);

        //  Array
        return view('admin.dashboard', [
            'title' => $title,
            'totalUsers' => $totalUsers
        ]);
    }

    public function reports()
    {
        return view('admin.reports');
    }
}
