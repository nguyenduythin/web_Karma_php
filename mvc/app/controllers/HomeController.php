<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\ProductGallery;
use Faker;
class HomeController  extends BaseController {
    public function index(){


      $product = Product::orderBy('views', 'desc')->take(8)->get();
      $productNew = Product::orderBy('id', 'desc')->take(8)->get();
  

      $this->render('home' ,compact('product','productNew' ));
     
    }



    public function error(){
        $this->render('errors.404');
         
      }
      public function header(){
        if(isset($_SESSION[CART])){
          $sessionCart =   $_SESSION[CART];
        }
        $this->render('layouts.header', compact('sessionCart'));
         
      }







public function fakeGallery(){

  $products = Product::all();
  foreach($products as $item){
  
    for($i = 0; $i < 4; $i++){
        $model = new ProductGallery();
        $model->product_id = $item->id;
        $model->img_url = 'https://picsum.photos/540/584';
        $model->save();
    }
}
        return "Success!";
}

        // faker data
    //   public function fakeUser(){
    //     $faker = Faker\Factory::create();
    //     for($i = 0; $i < 10; $i++){
    //         $model = new User();
    //         $model->name = $faker->name;
    //         $model->avatar = 'https://picsum.photos/640/480';
    //         $model->email = $faker->email; 
    //         $model->password = password_hash('123456', PASSWORD_DEFAULT);
    //         $model->role = 0;
          
    //         $model->save();
    //     }
    //     return "Success!";
    // }
    
}
?>