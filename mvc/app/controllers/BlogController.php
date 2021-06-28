<?php
namespace App\Controllers;
use App\Models\Product;

class BlogController  extends BaseController {
    public function index(){
      

      $this->render('blog');
     
    }
    


   
    
}
?>