<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Blog extends Model{
    protected $table = 'blogs';
    protected $fillable = ['title_blog','avatar_blog','content_blog','type_blog','id_user'];
 
    public function products(){
        return $this->hasMany(User::class ,'id_user');
    }
}

?>