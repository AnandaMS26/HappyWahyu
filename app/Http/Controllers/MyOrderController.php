<?php

namespace App\Http\Controllers;

use App\Models\MeatPackage;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class MyOrderController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $items = Transaction::where('users_id', $user_id)->get();
        
        return view('pages.myorder',[
            'items' => $items
        ]);
    }
}
