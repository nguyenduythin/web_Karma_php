<?php

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetails;
use App\Models\Product;
use App\Models\User;

class InvoiceDetailController  extends BaseController
{
  public function index()
  {
    $this->render('checkout', compact('sessionCart'));
  }

  public function postInvoiceDetail()
  {

    $invoice = new Invoice();
    $invoice->fill($_POST);
    if ($invoice->save()) {

      header('location: ' . BASE_URL . 'confirmation');
      //   unset($_SESSION[CART]);
    } else {
      echo ' <h1>THẤT BẠI</h1>';
      header('location: ' . BASE_URL . 'checkout');
    }
  }
  public function editInvoiceDetail($id)
  {
    $invoiceDetailone = Invoice::find($id);
    $invoiceDetailone->load('invoiceDetail');
    $invoiceDetail = InvoiceDetails::where('invoice_id', $id)->get();
    $invoiceDetail->load('product');
    $this->render('admin.invoice.invoice-edit-detail', compact('invoiceDetail', 'invoiceDetailone'));
  }
  public function editQuantityDetail()
  {

    if (isset($_GET['id'])) {
      $idPd = $_GET['id'];
    }
    $idInvoice = $_GET['idinvoice'];
    $quantityPd = $_GET['quantity'];
    $unitPrice = $_GET['unitprice'];
    $invoiceDetail = InvoiceDetails::find($idPd);
    $invoiceDetail->fill(['quantity' => $quantityPd]);
    $invoiceDetail->save();

    $invoiceDetailone = Invoice::find($idInvoice);
    $invoiceDetailone->fill(['total_price' => $unitPrice  * $quantityPd]);
    $invoiceDetailone->save();
    header('location: ' . BASE_URL . 'admin/invoice/editcart/' . $idInvoice);
    echo " <pre>";
    var_dump($unitPrice);
  }
}
