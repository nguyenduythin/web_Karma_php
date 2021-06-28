<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\User;

class MainController  extends BaseController
{
  public function index()
  {
    $user = User::count();
    $product = Product::count();
    $cate = Category::count();
    $comment = Comment::count();
    $blog = Blog::count();
    $invoice = Invoice::count();


    $totalPrice =  Invoice::sum("total_price");
   





    $this->render('admin.home', compact('user', 'product', 'cate', 'comment', 'blog', 'invoice'  , 'totalPrice'));
  }
}
