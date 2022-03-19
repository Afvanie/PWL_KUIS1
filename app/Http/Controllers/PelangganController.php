<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $pelanggans = Pelanggan::paginate(3);
        return view('blog.pelanggan')
            ->with('title', ' - pelanggan')
            ->with('pelanggans', $pelanggans);
    }
}