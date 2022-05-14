<?php

namespace App\Http\Controllers;

use App\Models\MeatPackage;
use Illuminate\Http\Request;

class ProdController extends Controller
{
    public function index(Request $request)
    {
        $items = MeatPackage::with(['galleries'])->get();
        return view('pages.produk',[
            'items' => $items
        ]);
    }
}
