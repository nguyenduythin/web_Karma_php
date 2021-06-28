<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class InvoiceDetails extends Model{
    protected $table = 'invoice_detail';
    protected $fillable = ['invoice_id','product_id','quantity','unit_price'];
    public function product(){
        return $this->beLongsTo(Product::class, 'product_id');
    }
    public function invoice(){
        return $this->beLongsTo(Category::class, 'invoice_id');
    }
    
}

?>