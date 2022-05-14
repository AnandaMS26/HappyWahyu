<?php

namespace App\Http\Controllers;

use App\Models\MeatPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = MeatPackage::with(['galleries'])->get();
        return view('pages.home',[
            'items' => $items,
            'latest_product' => MeatPackage::latest()->limit(3)->get()
        ]);
    }
}
