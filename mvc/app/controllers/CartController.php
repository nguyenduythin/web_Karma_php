<?php

namespace App\Controllers;

use App\Models\Product;

class CartController  extends BaseController
{
    public function index()
    {

        $this->render('cart');
    }

    public function cartUpdate()
    {
    }

    public function addToCart()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $cart = isset($_SESSION[CART]) == true ? $_SESSION[CART] : [];
        $quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;

        // dựa vào id nhận đc, lấy ra thông tin sản phẩm => mảng
        $product = Product::find($id);

        $product = $product->toArray();
        // kiểm tra trong giỏ hàng xem đã có sản phẩm này hay chưa ?
        $existedIndex = -1;

        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['id'] == $id) {
                $existedIndex = $i;
                break;
            }
        }
        if ($existedIndex == -1) {
            // nếu chưa có thì bổ sung thêm 1 phần tử trong mảng sản phẩm là quantity = 1
            // sau đó add sản phẩm vào biến $cart
          
                $product['quantity'] =  $quantity;
            

            array_push($cart, $product);
        } else {
            // nếu sản phẩm đã có trong giỏ hàng rồi
            // thì thay đổi giá trị của phần tử quantity += 1
         
                $cart[$existedIndex]['quantity'] += $quantity;
            
        }
        $_SESSION[CART] = $cart;
        header('location: ' . BASE_URL . 'category');
        echo "<script> alert('them thanh cong !')</script>";
      
    }
    public function addToCartTwo()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $cart = isset($_SESSION[CART]) == true ? $_SESSION[CART] : [];
        $iquantity = (isset($_GET['iquantity'])) ? $_GET['iquantity'] : '';

        if($iquantity <= 0){
            $iquantity = 1;
        }

        // dựa vào id nhận đc, lấy ra thông tin sản phẩm => mảng
        $product = Product::find($id);

        $product = $product->toArray();
        // kiểm tra trong giỏ hàng xem đã có sản phẩm này hay chưa ?
        $existedIndex = -1;

        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['id'] == $id) {
                $existedIndex = $i;
                break;
            }
        }
        if ($existedIndex == -1) {
            // nếu chưa có thì bổ sung thêm 1 phần tử trong mảng sản phẩm là quantity = 1
            // sau đó add sản phẩm vào biến $cart
            $product['quantity'] =  $iquantity;
            array_push($cart, $product);
        } else {
            // nếu sản phẩm đã có trong giỏ hàng rồi
            // thì thay đổi giá trị của phần tử quantity += 1
            $cart[$existedIndex]['quantity'] = $iquantity;
        }
        $_SESSION[CART] = $cart;
        header('location: ' . BASE_URL . 'cart');
    }

    public function cartDetail()
    {

        $cart = isset($_SESSION[CART]) == true ? $_SESSION[CART] : [];
        $this->render('cart', compact('cart'));
    }
    public function clearCart()
    {
        if (isset($_SESSION[CART])) {
            unset($_SESSION[CART]);
        }
        header('location: ' . BASE_URL . 'category');
        die;
    }







    // xóa sản phẩm cách .

    // public function clearCartId($id){

    //     if (isset($_SESSION[CART])) {

    //         foreach ($_SESSION[CART] as $key =>$value) {
    //             if($value['id']==$id) {
    //                 unset($_SESSION[CART][$key]);
    //                 $_SESSION[CART] = array_values($_SESSION[CART]);
    //                 header('location: '.BASE_URL.'cart');

    //               //   echo "<script>
    //               //  window.location.href = 'cart';
    //               //   </script>";
    //             }
    //          }
    //     }
    // }


    public function clearCartOne()
    {
        if (isset($_POST['remove-cart'])) {
            foreach ($_SESSION[CART] as $key => $value) {
                if ($value['id'] == $_POST['remove-id']) {
                    unset($_SESSION[CART][$key]);
                    $_SESSION[CART] = array_values($_SESSION[CART]);
                    header('location: ' . BASE_URL . 'cart');

                    //   echo "<script>
                    //  window.location.href = 'cart';
                    //   </script>";
                }
            }
        }
    }

    // xóa sản phẩm cách .



}
