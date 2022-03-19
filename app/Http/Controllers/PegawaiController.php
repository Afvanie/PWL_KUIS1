<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = Pegawai::paginate(3);
        return view('blog.pegawai')
            ->with('title','pegawai')
            ->with('pegawai', $pegawai);
    }
}
