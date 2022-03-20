<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $pegawais = Pegawai::paginate(3);
        return view('blog.pegawai')
            ->with('title','pegawai')
            ->with('pegawais', $pegawais);
    }
}
