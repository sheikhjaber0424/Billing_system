<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceProduct extends Model
{
    use HasFactory;
    protected $table = 'invoice_products';
    protected $primarykey = 'id';

    protected $fillable = ['price' , 'qty', 'total' ,'name' ];

    public function invoiceProductModel(){
        return $this->belongsTo(Invoice::class);
    }
}  
