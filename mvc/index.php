<?php
session_start();

$url = isset($_GET['url']) == true
    ? $_GET['url'] : "/";
    
require_once './commoms/utils.php';
require_once './vendor/autoload.php';
require_once './config/database.php';
require_once './commoms/routes.php';

// composer require illuminate/database
// composer require illuminate/events


// use App\Controllers\CategoryController;
// use App\Controllers\HomeController;
// use App\Controllers\ContactController;
// use App\Controllers\BlogController;
// use App\Controllers\CartController;
// use App\Controllers\detailProductController;

// use App\Controllers\LoginController;

// use App\Controllers\admin\UserController;
// use App\Controllers\admin\ProductController;
// use App\Controllers\admin\CateController;
// use App\Controllers\admin\BlogsController;
// use App\Controllers\admin\InvoiceController;
// use App\Controllers\admin\MainController;

// switch ($url) {
//     case "/":
//         $ctr = new HomeController();
//         $ctr->index();
//         break;

//         //category
//     case "category":
//         $ctr = new CategoryController();
//         $ctr->index();
//         break;
//     case "detail-product":
//         $ctr = new DetailProductController();
//         $ctr->index();
//         break;
//         //end category

//         //blog
//     case "blog":
//         $ctr = new BlogController();
//         $ctr->index();
//         break;
//         //end blog

//         //contact
//     case "contact":
//         $ctr = new ContactController();
//         $ctr->index();
//         break;
//          //end contact

//         //cart
//     case "cart":
//         $ctr = new CartController();
//         $ctr->index();
//         break;
//     case "add-cart":
//         $ctr = new CartController();
//         $ctr->addCart();
//         break;

//          // end cart
    

//         //Login
//     case "login":
//         $ctr = new LoginController();
//         $ctr->index();
//         break;
//     case "post-login":
//         $ctr = new LoginController();
//         $ctr->postLogin();
//         break;
//     case "logout":
//         $ctr = new LoginController();
//         $ctr->logOut();
//         break;
//         // end Login 


//         // ADMIN HOME

//     case "admin":
//         checkAuth();
//         $ctr = new MainController();
//         $ctr->index();
//         break;

//         // quản lý USER
//     case "admin-user":
//         $ctr = new UserController();
//         $ctr->index();
//         break;
//     case "add-user":
//         $ctr = new UserController();
//         $ctr->addUser();
//         break;
//     case "save-user":
//         $ctr = new UserController();
//         $ctr->saveUser();
//         break;
//     case "edit-user":
//         $ctr = new UserController();
//         $ctr->editUser();
//         break;
//     case "save-edit-user":
//         $ctr = new UserController();
//         $ctr->saveEditUser();
//         break;
//     case "delete-user":

//         $ctr = new UserController();
//         $ctr->deleteUser();

//         break;

//         //--! quản lý USER 

//         // quản lý Product
//     case "admin-product":
//         $ctr = new ProductController();
//         $ctr->index();
//         break;
//     case "add-product":
//         $ctr = new ProductController();
//         $ctr->addProduct();
//         break;
//     case "save-product":
//         $ctr = new ProductController();
//         $ctr->saveProduct();
//         break;
//     case "edit-product":
//         $ctr = new ProductController();
//         $ctr->editProduct();
//         break;
//     case "save-edit-product":
//         $ctr = new ProductController();
//         $ctr->saveEditProduct();
//         break;
//     case "delete-product":
//         $ctr = new ProductController();
//         $ctr->deleteProduct();

//         break;

//         //--! quản lý Product 

//         // quản lý Categories
//     case "admin-cate":
//         $ctr = new CateController();
//         $ctr->index();
//         break;
//     case "add-cate":
//         $ctr = new CateController();
//         $ctr->addCate();
//         break;
//     case "save-cate":
//         $ctr = new CateController();
//         $ctr->saveCate();
//         break;
//     case "edit-cate":
//         $ctr = new CateController();
//         $ctr->editCate();
//         break;
//     case "save-edit-cate":
//         $ctr = new CateController();
//         $ctr->saveEditCate();
//         break;
//     case "delete-cate":
//         $ctr = new CateController();
//         $ctr->deleteCate();

//         break;

//         //--! quản lý Categories 



//         // quản lý Blogs
//         case "admin-blog":
//             $ctr = new BlogsController();
//             $ctr->index();
//             break;
//         case "add-blog":
//             $ctr = new BlogsController();
//             $ctr->addBlog();
//             break;
//         case "save-blog":
//             $ctr = new BlogsController();
//             $ctr->saveBlog();
//             break;
//         case "edit-blog":
//             $ctr = new BlogsController();
//             $ctr->editBlog();
//             break;
//         case "save-edit-blog":
//             $ctr = new BlogsController();
//             $ctr->saveEditBlog();
//             break;
//         case "delete-blog":
//             $ctr = new BlogsController();
//             $ctr->deleteBlog();
    
//             break;
    
//             //--! quản lý Blogs 

//             // quản lý Invoice
//         case "admin-invoice":
//             $ctr = new InvoiceController();
//             $ctr->index();
//             break;
//         case "add-invoice":
//             $ctr = new InvoiceController();
//             $ctr->addInvoice();
//             break;
//         case "save-invoice":
//             $ctr = new InvoiceController();
//             $ctr->saveInvoice();
//             break;
//         case "edit-invoice":
//             $ctr = new InvoiceController();
//             $ctr->editInvoice();
//             break;
//         case "save-edit-invoice":
//             $ctr = new InvoiceController();
//             $ctr->saveEditInvoice();
//             break;
//         case "delete-invoice":
//             $ctr = new InvoiceController();
//             $ctr->deleteInvoice();
    
//             break;
    
//             //--! quản lý Blogs 



     




//     default:
//         $ctr = new HomeController();
//         $ctr->error();
//         break;
// }
