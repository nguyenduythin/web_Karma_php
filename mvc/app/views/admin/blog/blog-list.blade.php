

@extends('admin\layouts.main')

@section('title' , 'Blog')
@section('content')
<div class="add-product">
    <a href="{{BASE_URL}}admin/blog/add">Thêm Mới</a>
</div>
<table>
    <tr>
        <th>No</th>
        <th>Tiêu Đề Bài Viết</th>
        <th>Ảnh Bài viết</th>
        <th>Nội Dung</th>
        <th>Người tạo</th>
        <th>Kiểu Loại</th>
        <th>Ngày Tạo</th>
        <th>Hành Động</th>
    </tr>
    @php
        $stt = 1;
    @endphp
@foreach ($blog as $item)
    

    <tr>
        <td> {{$offset + $loop->iteration}} </td>
        <td> {{$item->title_blog}} </td>
        <td><img width="50px" src="{{PUBLIC_URL.$item->avatar_blog}}" alt="" /> </td>
        <td> {{$item->content_blog}} </td>  
         <td> {{$item->id_user}} </td>
        <td> {{$item->type_blog}} </td>
     
        <td> {{$item->created_at}} </td>
       
        <td>
       <a href="{{BASE_URL}}admin/blog/edit/{{$item->id}}"><button  data-toggle="tooltip" type="button" class="btn btn-warning" title="Edit"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> 
       <a class="btn-del"  href="{{BASE_URL}}admin/blog/{{$item->id}}" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
         
        </td>
    </tr>

    @endforeach
</table>
@endsection
@section('pagination')
<div class="custom-pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Trước</a></li>
   @for ($i = 1; $i <=  $totalPage ; $i++)
           <li class="page-item"><a class="page-link" href="?page={{$i}}">{{$i}}</a></li>
   @endfor
        <li class="page-item"><a class="page-link" href="#">Sau</a></li>
    </ul>
</div>

@endsection