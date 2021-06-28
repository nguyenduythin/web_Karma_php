<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\ProductGallery;

class DetailProductController  extends BaseController {
    public function index( $id){
       
        $view =1;
        $product = Product::find($id);
        $product->load('category');

        $view += $product['views'];
        $product->fill(['views' => $view ]);
        $product->save();
        $productGallery = ProductGallery::where('product_id',$id)->get();
        $productLate = Product::where('cate_id',$product->category->id)->where('id','!=' , $id)->take(9)->get();

    

      if ($product) {
          $this->render('detailProduct', compact('product' ,'productLate','productGallery'));
      } else {
          header('location: ./');
      }

 
     
    }
    


   
}
?>