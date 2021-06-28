

@extends('admin\layouts.main')

@section('title' , 'Comment')
@section('content')
<div class="add-product">
  
</div>
<table>
    <tr>
        <th>No</th>
        <th>Tiêu Đề</th>
        <th>Nội Dung</th>
        <th>Tài Khoản</th>
        <th>Sản phẩm</th>
        <th>Hành Động</th>
    </tr>
    @php
        $stt = 1;
    @endphp
@foreach ($comment as $item)
    

    <tr>
        <td> {{$offset + $loop->iteration}} </td>
        <td> {{$item->title}} </td>
     
        <td> {{$item->content}} </td>
        <td> {{$item->users->name}} </td>
        <td> {{$item->products->name}} </td>
        
       
        <td>
            <a href=""><button  data-toggle="tooltip" type="button" class="btn btn-info" title="Detail"  >Chi Tiết</button></a> 
            <a class="btn-del"  href="{{BASE_URL}}admin/comment/{{$item->id}}" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
         
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