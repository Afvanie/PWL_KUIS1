<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('blog.home', ['title' => '- Home']);
    }
    
    public function contact()
    {
        return view('blog.contact-us', ['title' => '- Kontak Kami']);
    }
    public function about()
    {
        return view('blog.about-us', ['title' => '- Tentang Kami']);
    }
}
