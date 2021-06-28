<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model{
    protected $table = 'comments';
    protected $fillable = ['title','content'];

    public function products(){
        return $this->belongsTo(Product::class ,'product_id');
    }

    public function users(){
        return $this->belongsTo(User::class ,'user_id');
    }
}

?>