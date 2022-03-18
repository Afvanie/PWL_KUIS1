<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('blog.home', ['title' => '- Home']);
    }
    public function about()
    {
        return view('about', ['title' => '- Tentang Kami']);
    }
}
