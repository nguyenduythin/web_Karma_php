<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\User;

class LoginController  extends BaseController {
    public function index(){
      $this->render('auth.login');
    }
    public function postLogin(){
      $email = isset($_POST['email'])== true ? trim($_POST['email']) : '';
      $password = isset($_POST['password'])== true ? trim($_POST['password']) : '';
      if(empty($email)||empty($password)){
          header('location: '.BASE_URL.'login?msg= tài khoản/mật khẩu không hợp lệ.');die;
      }
      $user = User::where('email',$email)->first();
      if(empty($user)||
      !password_verify($password,$user->password)){
       header('location: '.BASE_URL.'login?msg= tài khoản/mật khẩu không hợp lệ.');die;
      }
      $_SESSION[AUTH] = [
          'id'=> $user->id,
          'name' => $user->name,
          'avatar' => $user->avatar,
          'email' => $user->email,
          'role' => $user->role
      ];
      header('location: '.BASE_URL);
   }
   public function logOut(){
    unset($_SESSION[AUTH]);
    header('location: '.BASE_URL);die;
   }

   public function registr(){
      
        $user = new User();
        $user->fill($_POST);
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
        $user->save();
        if ($user->save()) {
          header('location: '.BASE_URL.'login');
        }
   }
}
