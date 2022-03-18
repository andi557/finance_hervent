<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hervent extends Model
{
    protected $fillable = ['namaproject', 'namacustomer', 'item1', 
    'harga1', 'tanggalbuat', 'editcode', 'jatuhtempo', 'metodebayar', 'nomorfa',
    'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10', 
    'harga2', 'harga3', 'harga4', 'harga5', 'harga6', 'harga7', 'harga8', 'harga9', 'harga10',
    'qty1', 'qty2', 'qty3', 'qty4', 'qty5', 'qty6', 'qty7', 'qty8', 'qty9', 'qty10',  
    'amount1', 'amount2', 'amount3', 'amount4', 'amount5', 'amount6', 'amount7', 'amount8', 'amount9', 'amount10', 
    'total', 'pelunasan', 'downpayment'];
}
