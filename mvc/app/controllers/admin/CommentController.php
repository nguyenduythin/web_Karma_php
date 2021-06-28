<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Comment;


class CommentController  extends BaseController
{
    public function index()

    {
        
        $pagenumber = isset($_GET['page']) == true ? $_GET['page'] : 1;
        $pagesize = isset($_GET['size']) == true ? $_GET['size'] : 10;
        $offset = ($pagenumber-1)*$pagesize;

        $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";

        if($keyword != ""){
            $comment = Comment::take($pagesize)->skip($offset)->get();
            $comment->load('users','products');
            $totalPage = intval(ceil(Comment::count()/$pagesize));
        }else{
            
            $comment = Comment::take($pagesize)->skip($offset)->get();
            $comment->load('users','products');
            $totalPage = intval(ceil(Comment::count()/$pagesize));
        }

          $this->render('admin\comment.comment-list', compact('comment', 'totalPage','offset' ));
    }
    public function deleteComment($id )
    {
        
        $comment = Comment::find($id);
        if (!$comment) {
            header('location: '.BASE_URL.'admin/comment');
            die;
        }
        $comment->delete();
        header('location: '.BASE_URL.'admin/comment');
    }

}
