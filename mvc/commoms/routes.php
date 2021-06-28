<?php

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ContactController;
use App\Controllers\BlogController;
use App\Controllers\CartController;
use App\Controllers\CheckoutController;
use App\Controllers\ConfirmationController;

use App\Controllers\detailProductController;
use App\Controllers\LoginController;

// ADMIN
use App\Controllers\admin\UserController;
use App\Controllers\admin\ProductController;
use App\Controllers\admin\CateController;
use App\Controllers\admin\BlogsController;
use App\Controllers\admin\InvoiceController;
use App\Controllers\admin\MainController;
use App\Controllers\admin\CommentController;
use App\Controllers\InvoiceDetailController;
// ADMIN



use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
$router = new RouteCollector();
use Phroute\Phroute\Exception\HttpRouteNotFoundException;




$router->filter('auth', function(){    
    if(!isset($_SESSION[AUTH]) || empty($_SESSION[AUTH])){
        header('location: ' . BASE_URL . 'login');
        die;
    }
});




$router->get('/', [HomeController::class, "index"]);


$router->get('/category', [CategoryController::class, "index"]);

$router->get('/contact', [ContactController::class, "index"]);

$router->get('/blog', [BlogController::class, "index"]);
//cart
        $router->get('/cart', [CartController::class, "cartDetail"]);

        $router->get('/confirmation', [ConfirmationController::class, "index"]);

        // carrt ---update
   
        //$router->get('/cartupdate', [CartController::class, "cartUpdate"]);
        // carrt ---update

        // carrt --- xóa 
        $router->post('/cart', [CartController::class, "clearCartOne"]);

        $router->get('/clearcart', [CartController::class, "clearCart"]);

        //  carrt ---xóa 

        $router->get('/add-to-cart', [CartController::class, "addToCart"]);
        $router->get('/add-to-cart-two', [CartController::class, "addToCartTwo"]);

        $router->get('/checkout', [CheckoutController::class, "index"]);
        $router->post('/checkout', [CheckoutController::class, "checkoutAddInvoice"]);
//cart



$router->get('/detail-product/{id}', [detailProductController::class, "index"]);



$router->get('/login', [LoginController::class, "index"]);
$router->post('/login', [LoginController::class, "postLogin"]);
$router->post('/registr', [LoginController::class, "registr"]);
$router->get('/logout', [LoginController::class, "logOut"]);


//admin
// $router->get('/admin', [MainController::class, "index"] ,['before' => 'auth']);

//usser
$router->group(['prefix' => 'admin','before' => 'auth' ], function($router){

$router->get('/', [MainController::class, "index"] );



$router->group(['prefix' => 'user'], function($router){
    $router->get('/', [UserController::class, "index"] );
    $router->get('/add', [UserController::class, "addUser"] );
    $router->post('/add', [UserController::class, "saveUser"] );
    $router->get('/edit/{id}', [UserController::class, "editUser"] );
    $router->post('/edit/{id}', [UserController::class, "saveEditUser"] );
    $router->get('/{id}', [UserController::class, "deleteUser"] );
});

$router->group(['prefix' => 'product'], function($router){
    $router->get('/', [ProductController::class, "index"] );
    $router->get('/add', [ProductController::class, "addProduct"] );
    $router->post('/add', [ProductController::class, "saveProduct"] );
    $router->get('/edit/{id}', [ProductController::class, "editProduct"] );
    $router->post('/edit/{id}', [ProductController::class, "saveEditProduct"] );
    $router->get('/{id}', [ProductController::class, "deleteProduct"] );
});

$router->group(['prefix' => 'cate'], function($router){
    $router->get('/', [CateController::class, "index"] );
    $router->get('/add', [CateController::class, "addCate"] );
    $router->post('/add', [CateController::class, "saveCate"] );
    $router->get('/edit/{id}', [CateController::class, "editCate"] );
    $router->post('/edit/{id}', [CateController::class, "saveEditCate"] );
    $router->get('/{id}', [CateController::class, "deleteCate"] );
});

$router->group(['prefix' => 'blog'], function($router){
    $router->get('/', [BlogsController::class, "index"] );
    $router->get('/add', [BlogsController::class, "addBlog"] );
    $router->post('/add', [BlogsController::class, "saveBlog"] );
    $router->get('/edit/{id}', [BlogsController::class, "editBlog"] );
    $router->post('/edit/{id}', [BlogsController::class, "saveEditBlog"] );
    $router->get('/{id}', [BlogsController::class, "deleteBlog"] );
});


$router->group(['prefix' => 'invoice'], function($router){
    $router->get('/', [InvoiceController::class, "index"] );
    $router->get('/add', [InvoiceController::class, "addInvoice"] );
    $router->post('/add', [InvoiceController::class, "saveInvoice"] );
    $router->get('/edit/{id}', [InvoiceController::class, "editInvoice"] );
    $router->get('/editcart/{id}', [InvoiceDetailController::class, "editInvoiceDetail"] );
    $router->get('/edit-quantity', [InvoiceDetailController::class, "editQuantityDetail"] );
    $router->post('/edit/{id}', [InvoiceController::class, "saveEditInvoice"] );
    $router->get('/{id}', [InvoiceController::class, "deleteInvoice"] );
});


$router->group(['prefix' => 'comment'], function($router){
    $router->get('/', [CommentController::class, "index"] );
    $router->get('/{id}', [CommentController::class, "deleteComment"] );
});

});

// $router->get('fake-gallery', [HomeController::class, 'fakeGallery']);
// $router->get('fake-users', [HomeController::class, 'fakeUser']);



$router->get('/error-404', [HomeController::class, "error"]);

$dispatcher = new Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
}catch(HttpRouteNotFoundException $ex){
    header('location: ' . BASE_URL . 'error-404');
    die;
}


    
// Print out the value returned from the dispatched function
echo $response;
