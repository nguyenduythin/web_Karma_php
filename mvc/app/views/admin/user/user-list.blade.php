

@extends('admin\layouts.main')

@section('title' , 'User')
@section('content')
<div class="add-product">
    <a href="{{BASE_URL}}admin/user/add">Thêm Mới</a>
</div>
<table>
    <tr>
        <th>No</th>
        <th>Tên</th>
        <th>Ảnh Đại Diện</th>
        <th>Email</th>
        <th>Mật Khẩu</th>
        <th>Role</th>
       
       
        <th>Hành Động</th>
    </tr>
    @php
        $stt = 1;
    @endphp
@foreach ($user as $item)
    

    <tr>
        <td> {{$offset + $loop->iteration}} </td>
        <td> {{$item->name}} </td>
        <td><img width="50px" src="{{PUBLIC_URL.$item->avatar}}" alt="" /> </td>
        <td> {{$item->email}} </td>
        <td> {{$item->password}} </td>
        <td> {{$item->role}} </td>
       
       
       
        <td>
       <a href="{{BASE_URL}}admin/user/edit/{{$item->id}}"><button  data-toggle="tooltip" type="button" class="btn btn-warning" title="Edit"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> 
      <a class="btn-del"  href="{{BASE_URL}}admin/user/{{$item->id}}" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
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