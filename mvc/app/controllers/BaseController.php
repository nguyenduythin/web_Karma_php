<?php
namespace App\Controllers;

use Jenssegers\Blade\Blade;

class BaseController{
    protected function render($viewFile, $viewData =[]){
        $blade = new Blade('./app/views','./storage');
        echo $blade->make($viewFile, $viewData)->render();
}
 public function kiemTra_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

}

?>