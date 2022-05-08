<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TransactionDetail extends Model
{
    use softDeletes;

    protected $fillable = [
        'transactions_id', 'username', 'phone',
        'address'
    ];

    protected $hidden =  [

    ];

    public function transaction(){
        return $this->belongTo(Transaction::class, 'transactions_id', 'id');
    }
}
