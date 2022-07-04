<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $primarykey = 'id';
    protected $fillable = [
        'client' , 'title', 'invoice_no',
        'discount', 'sub_total', 'grand_total'
    ];

    public function invoiceModel()
    {
        return $this->hasMany(InvoiceProduct::class);
    }
    public static function find($id){
        $invoices = self::all();
  
 
        foreach($invoices as $invoice){
         if($invoice['id'] == $id){
             return $invoice;
            }
        }
        
     }
}
