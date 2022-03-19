<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::paginate(3);
        return view('blog.menu')
            ->with('title', ' - menu')
            ->with('menus', $menus);
    }
}
