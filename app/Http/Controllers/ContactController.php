<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class ContactController extends Controller
{
    private static $data = [];

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        self::$data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        // return redirect('/contact/result');
        return redirect()->route('contact.result');
    }

    public function result()
    {
        return view('contact-result', [
            'data' => self::$data
        ]);
    }
}

