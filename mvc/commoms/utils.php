<?php
const BASE_URL = 'http://localhost/php2/asm_final/mvc/';
const PUBLIC_URL  = BASE_URL.'public/';
const  TEMPLATE_ASSET_URL  = PUBLIC_URL.'template/';
const  THEME_ASSET_URL  = PUBLIC_URL.'theme/';
const  UPLOAD_URL  = PUBLIC_URL.'uploads/';
const  ERROR_ASSET_URL  = PUBLIC_URL.'error/';

const  LOGIN_ASSET_URL  = TEMPLATE_ASSET_URL.'login/';



const MENBER_ROLE = 1;
const ADMIN_ROLE = 200;
const AUTH = 'session_auth';
const CART = 'session_cart';
// sử dụng check auth để kiểm tra session.
function checkAuth($role = MENBER_ROLE){
            if (!isset($_SESSION[AUTH]) || empty($_SESSION[AUTH]) || $_SESSION[AUTH]['role'] < $role)
            header('location: ' .BASE_URL.'login');
    }
    function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>