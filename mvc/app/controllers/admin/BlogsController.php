<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogsController  extends BaseController
{
    public function index()

    {
        $pagenumber = isset($_GET['page']) == true ? $_GET['page'] : 1;
        $pagesize = isset($_GET['size']) == true ? $_GET['size'] : 5;
        $offset = ($pagenumber-1)*$pagesize;

        $keyword = isset($_GET['keywordadmin']) == true ? $_GET['keywordadmin'] : "";

        if($keyword != ""){
            $blog = Blog::where("cate_name", "like", "%$keyword%")->orderBy('id', 'desc')->take($pagesize)->skip($offset)->get();
            $totalPage = intval(ceil(Blog::count()/$pagesize));
        }else{
            $blog = Blog::take($pagesize)->skip($offset)->orderBy('id', 'desc')->get();
            $totalPage = intval(ceil(Blog::count()/$pagesize));
        }



        //print_r($page);die;

        //  var_dump($cate);die;
        $this->render('admin\blog.blog-list', compact('blog', 'totalPage','offset'));
    }

    public function addBlog()
    {
        $typeBlog = [
            
            'id' => 1 ,
            'name' => 'moi'
                 ];
               


        $this->render('admin\blog.blog-add' , compact('typeBlog'));
    }
    public function saveBlog()
    {
        $blog = new Blog();
        $blog->fill($_POST);
        $file =  $_FILES['avatar_blog'];
        $avatar = '';
        if ($file['size'] > 0) {
            $avatar = 'uploads/' . uniqid() . '-' . $file['name']; // uniqid trả về mã tên ảnh để k bị trùng.
            move_uploaded_file($file['tmp_name'], 'public/' . $avatar);
            $blog['avatar_blog'] = $avatar;
        }




        if ($blog->save() == false) {
            $_SESSION['status'] = 'Add failed!';
            $_SESSION['status_code'] = 'error';
            header('location: '.BASE_URL.'admin/blog');
        } else {
            $_SESSION['status'] = 'Successfully added!';
            $_SESSION['status_code'] = 'success';
            header('location:'.BASE_URL.'admin/blog');
        }
    }
    public function editBlog( $id )
    {
       
        $blog = Blog::find($id);
        if ($blog) {
            $this->render('admin\blog.blog-edit', compact('blog'));
        } else {
            header('location: '.BASE_URL.'admin/blog');
        }
    }
    public function saveEditBlog( $id )
    {
        
        $blog = Blog::find($id);
        if (!$blog) {
            header('location:'.BASE_URL.'admin/blog');
            die;
        }
        $blog->fill($_POST);

        $file =  $_FILES['avatar_blog'];
        $avatar = '';
        if ($file['size'] > 0) {
            $avatar = 'uploads/' . uniqid() . '-' . $file['name']; // uniqid trả về mã tên ảnh để k bị trùng.
            move_uploaded_file($file['tmp_name'], 'public/' . $avatar);
            $blog['avatar_blog'] = $avatar;
        }

        if ($blog->save() == false) {
            $_SESSION['status'] = 'Repair failed!';
            $_SESSION['status_code'] = 'error';
            header('location: '.BASE_URL.'admin/blog');
        } else {
            $_SESSION['status'] = 'Repaired successfully!';
            $_SESSION['status_code'] = 'success';
            header('location:'.BASE_URL.'admin/blog');
        }
    }
    public function deleteBlog( $id )
    {
       
        $blog = Blog::find($id);
        if (!$blog) {
            header('location: '.BASE_URL.'admin/blog');
            die;
        }
        $blog->delete();
        header('location: '.BASE_URL.'admin/blog');
    }
}
