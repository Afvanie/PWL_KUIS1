<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = Supplier::paginate(3);
        return view('blog.supplier')
            ->with('title', ' - supplier')
            ->with('suppliers', $suppliers);
    }
}