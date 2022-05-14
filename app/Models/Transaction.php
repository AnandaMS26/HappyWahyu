<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Transaction extends Model
{
    use softDeletes;

    protected $fillable = [
        'meat_packages_id', 'users_id', 'transaction_total',
        'transaction_status'
    ];

    protected $hidden =  [

    ];

    public function details(){
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }

    public function meat_package(){
        return $this->belongsTo(MeatPackage::class, 'meat_packages_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
