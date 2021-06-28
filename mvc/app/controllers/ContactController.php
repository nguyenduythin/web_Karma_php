<?php
namespace App\Controllers;
use App\Models\Product;

class ContactController  extends BaseController {
    public function index(){
      

      $this->render('contact');
     
    }

    
}
?>