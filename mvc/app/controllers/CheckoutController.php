<?php

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetails;
use App\Models\Product;
use App\Models\User;

class CheckoutController  extends BaseController
{
  public function index()
  {
    // echo'<pre>';
    // var_dump($_SESSION[CART]);die;
    if (isset($_SESSION[CART])) {
      $sessionCart =   $_SESSION[CART];
    }
    $this->render('checkout', compact('sessionCart'));
  }

  public function checkoutAddInvoice()
  {



    $error = [];
    if (isset($_SESSION[CART])) {
      $sessionCart =   $_SESSION[CART];
    }
    if (empty($_POST['customer_name'])) {
      $error['Name_required'] = 'Vui lòng nhập Name !';
    }
    if (empty($_POST['customer_phone_number'])) {
      $error['phone_required'] = 'Vui lòng nhập Phone !';
    }
    if (empty($_POST['customer_email'])) {
      $error['email_required'] = 'Vui lòng nhập Email !';
    }
    if (empty($_POST['customer_address'])) {
      $error['address_required'] = 'Vui lòng nhập Address !';
    }
    if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $_POST['customer_email'])) {
      $error['email_dd_required'] = 'Email sai định dạng !';
    }

    if (empty($error)) {
      // echo'<pre>';
      // var_dump($_POST);die;
      $invoice = new Invoice();

      $invoice->fill($_POST);
      if (isset($_SESSION[CART]) && $invoice->save()) {
        $sessionCart =   $_SESSION[CART];
        //  echo'<pre>';
        // var_dump($sessionCart);die;
        foreach ($sessionCart as $item) {
          $invoiceDetail = new InvoiceDetails();
          $invoiceDetail->fill(['product_id' => $item['id'], 'invoice_id' => $invoice->id, 'quantity' => $item['quantity'], 'unit_price' => $item['price']]);
          $invoiceDetail->save();
        }

        header('location: ' . BASE_URL . 'confirmation');
        //   unset($_SESSION[CART]);
      } else {
        echo ' <h1>THẤT BẠI</h1>';
        header('location: ' . BASE_URL . 'checkout');
      }
    }
    $this->render('checkout', compact('error', 'sessionCart'));
  }
}
