<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController  extends BaseController
{
  public function index()
  {


    $cate = Category::all();
    // if (isset($_GET['cate']) && ($_GET['cate'] > 0)) {
    //   $cateD = $_GET['cate'];
    //   $product = Product::where('cate_id', '=', $cateD)->limit(3)->get();
    // } else {
    //   $product = Product::all()->take(9);
    // }


    $pagenumber = isset($_GET['page']) == true ? $_GET['page'] : 1;
    $pagesize = isset($_GET['size']) == true ? $_GET['size'] : 6;
    $offset = ($pagenumber - 1) * $pagesize;

    $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
    if ($keyword != "") {
      if (isset($_GET['cate']) && ($_GET['cate'] > 0)) {
        $cateD = $_GET['cate'];
        $product = Product::where("name", "like", "%$keyword%")->where('cate_id', '=', $cateD)->take($pagesize)->skip($offset)->get();
        $totalPage = intval(ceil(Product::count() / $pagesize));
      } else {

        $product = Product::where("name", "like", "%$keyword%")->take($pagesize)->skip($offset)->get();
        $totalPage = intval(ceil(Product::count() / $pagesize));
      }
    } else {
      if (isset($_GET['cate']) && ($_GET['cate'] > 0)) {
        $cateD = $_GET['cate'];
        $product = Product::where('cate_id', '=', $cateD)->take($pagesize)->skip($offset)->get();
        $totalPage = intval(ceil(Product::count() / $pagesize));
      } else {
        $product = Product::take($pagesize)->skip($offset)->get();
        $totalPage = intval(ceil(Product::count() / $pagesize));
      }
    }





    $this->render('category', compact('product', 'cate', 'totalPage'));
  }
}
