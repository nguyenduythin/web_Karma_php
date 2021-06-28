<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

class InvoiceController  extends BaseController
{
    public function index()

    {
        $pagenumber = isset($_GET['page']) == true ? $_GET['page'] : 1;
        $pagesize = isset($_GET['size']) == true ? $_GET['size'] : 10;
        $offset = ($pagenumber - 1) * $pagesize;

        $keyword = isset($_GET['keywordadmin']) == true ? $_GET['keywordadmin'] : "";

        if ($keyword != "") {
            $invoice = Invoice::where("customer_name", "like", "%$keyword%")->orderBy('id', 'desc')->take($pagesize)->skip($offset)->get();
            $totalPage = intval(ceil(Invoice::count() / $pagesize));
        } else {
            $invoice = Invoice::take($pagesize)->skip($offset)->orderBy('id', 'desc')->get();
            $totalPage = intval(ceil(Invoice::count() / $pagesize));
        }





        //print_r($page);die;



        //  var_dump($invoice);die;
        $this->render('admin\invoice.invoice-list', compact('invoice', 'totalPage', 'offset'));
    }

    public function addInvoice()
    {

        $this->render('admin\invoice.invoice-add');
    }
    public function saveInvoice()
    {
        $invoice = new Invoice();
        $invoice->fill($_POST);



        if ($invoice->save() == false) {
            $_SESSION['status'] = 'Add failed!';
            $_SESSION['status_code'] = 'error';
            header('location: ' . BASE_URL . 'admin/invoice');
        } else {
            $_SESSION['status'] = 'Successfully added!';
            $_SESSION['status_code'] = 'success';
            header('location: ' . BASE_URL . 'admin/invoice');
        }
    }
    public function editInvoice($id)
    {
        $invoice = Invoice::find($id);
        if ($invoice) {
            $this->render('admin\invoice.invoice-edit', compact('invoice'));
        } else {
            header('location:' . BASE_URL . 'admin/invoice');
        }
    }
    public function saveEditInvoice($id)
    {

        $invoice = Invoice::find($id);
        if (!$invoice) {
            header('location:' . BASE_URL . 'admin/invoice');
            die;
        }
        $invoice->fill($_POST);


        if ($invoice->save() == false) {
            $_SESSION['status'] = 'Repair failed!';
            $_SESSION['status_code'] = 'error';
            header('location: ' . BASE_URL . 'admin/invoice');
        } else {
            $_SESSION['status'] = 'Repaired successfully!';
            $_SESSION['status_code'] = 'success';
            header('location: ' . BASE_URL . 'admin/invoice');
        }
    }
    public function deleteInvoice($id)
    {

        $invoice = Invoice::find($id);
        if (!$invoice) {
            header('location: ' . BASE_URL . 'admin/invoice');
            die;
        }
        $invoice->delete();
        header('location: ' . BASE_URL . 'admin/invoice');
    }
}
