<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    private static $feedbacks = [];

    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        self::$feedbacks[] = $request->comment;
        return redirect()->route('feedback.index');
    }

    public function index()
    {
        return view('feedback.index', [
            'feedbacks' => self::$feedbacks
        ]);
    }
}
