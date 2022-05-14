<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\MeatPackage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details', 'meat_package', 'user'])->where('id', $id)->findOrFail($id);

        return view('pages.checkout',[
            'item' => $item
        ]);

    }

    public function process(Request $request, $id)
    {
        $meat_package = MeatPackage::findOrFail($id);

        $transaction = Transaction::create([
            'meat_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'transaction_total' => $meat_package->price,
            'transaction_status' => 'IN_CART',
           
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'address' => Auth::user()->address
        ]);
        return redirect()->route('checkout', $transaction->id);
    }
    

    public function remove(Request $request, $detail_id)
    {
        
    }

    public function create(Request $request, $id)
    {
        
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        return view('pages.success');
    }
}
