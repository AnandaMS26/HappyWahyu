<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArtikelPackage;
use App\Models\MeatPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = MeatPackage::with(['galleries'])->get();
        // $artikel = ArtikelPackage::with(['galleries'])->get();
        $artikel = ArtikelPackage::with(['artikel_galleries'])->get();

        return view('pages.home',[
            'items' => $items,
            'artikel' => $artikel,
            'latest_product' => MeatPackage::latest()->limit(3)->get(),
            'latest_article' => ArtikelPackage::latest()->limit(3)->get()
        ]);
    }
}
