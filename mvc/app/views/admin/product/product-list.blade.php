

@extends('admin\layouts.main')

@section('title' , 'Sản phẩm')
@section('content')

<div class="add-product">
    <a href="{{BASE_URL}}admin/product/add">Thêm Mới</a>
</div>

<table>
    <tr>
        <th>No</th>
        <th>Tên</th>
        <th>Ảnh</th>
        <th>Giá</th>
        <th>Mô Tả Ngắn</th>
        <th>Loại</th>
        
        <th>Sao</th>
        <th>Lượt xem</th>
     
        <th>Hành Động</th>
    </tr>
    @php
        $stt = 1;
    @endphp
@foreach ($product as $item)
    

    <tr>
        <td> {{$offset + $loop->iteration}} </td>
        <td> {{$item->name}} </td>
        <td><img width="50px" src="{{PUBLIC_URL.$item->image}}" alt="" /> </td>
        <td>$ {{number_format($item->price)}} </td>
        <td> {{$item->short_desc}} </td>
        <td> {{$item->category->cate_name}} </td>
        
        <td> {{$item->star}} </td>
        <td> {{$item->views}} </td>
        
       
        <td>
       <a href="{{BASE_URL}}admin/product/edit/{{$item->id}}"><button  data-toggle="tooltip" type="button" class="btn btn-warning" title="Edit"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> 
       <a class="btn-del"  href="{{BASE_URL}}admin/product/{{$item->id}}" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
         
        </td>
    </tr>

    @endforeach
</table>
@endsection
@section('pagination')
<div class="custom-pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
   @for ($i = 1; $i <=  $totalPage ; $i++)
           <li class="page-item"><a class="page-link" href="?page={{$i}}">{{$i}}</a></li>
   @endfor
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</div>

@endsection