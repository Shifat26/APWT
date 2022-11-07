<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postscontroller extends Controller
{
    public function index()
    {
        return view('posts/index');
    }
}
