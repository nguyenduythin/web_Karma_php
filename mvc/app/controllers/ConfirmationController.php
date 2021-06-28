<?php
namespace App\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetails;
use App\Models\Product;
use App\Models\User;

class ConfirmationController  extends BaseController {
    public function index(){
      $invoice = Invoice::orderBy('id', 'desc')->first();
      if(isset($_SESSION[CART])){
        $sessionCart =   $_SESSION[CART];
        }
        
      $this->render('confirmation' ,compact('sessionCart','invoice'));
        
    }
    
}
?>