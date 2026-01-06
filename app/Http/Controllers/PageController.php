<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
        

class PageController extends Controller
{
    public function home()
    {
        $title = "Home Page";
        $message = "Welcome to Laravel Controllers";

        return view('home', compact('title', 'message'));
    }

    public function about()
    {
        $title = "About Us";
        $message = "This is About Page";

        return view('about', compact('title', 'message'));
    }

    public function contact()
    {
        $title = "Contact Us";
        $message = "Contact Page Content";

        return view('contact', compact('title', 'message'));
    }
    public function user($name)
{
    return view('user', ['username' => $name]);
}

}
